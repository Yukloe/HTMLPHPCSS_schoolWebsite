<?php
  $titre = "Page de projets";
  include('header.inc.php')
?>

<?php
  include('nav.inc.php')
?>

<div class=container>
  <h1>Liste des projets personnels</h1>
</div>

<?php
  
  // Connexion :
  require_once("param.inc.php");
  $mysqli = new mysqli($host, $login, $passwd, $dbname);
  if ($mysqli->connect_error) {
      die('Erreur de connexion (' . $mysqli->connect_errno . ') '
              . $mysqli->connect_error);
  }

  // Execution
  if ($stmt = $mysqli->prepare("SELECT project.name, project.description, project.multi, project.confidential, project.valide, project.creator_id, user.prenom, user.nom FROM `project` INNER JOIN `user` ON user.id = project.creator_id")){
    $stmt->execute();
    $stmt->bind_result($name, $description, $multi, $confidential, $valide, $creator_id, $creator_fname, $creator_lname);
    while ($stmt->fetch()) { 
      if($creator_id==$_SESSION['id']) { ?>
        <div class="card" style="margin : 10px 20px 0 15px;">
          <div class="card-body">
            <!--Add the name-->
            <h5 class="card-title"><?= $name; ?></h5>
      
            <!--Add the description-->
            <p class="card-text"><?= $description; ?></p>
            
            <!--Verify is the multi-team mode is checked-->
            <div class="form-check">
              <?php
                if ($multi==2) {
              ?>
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled checked>
              <?php
                } else {
              ?>
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled> 
              <?php
                }
              ?>
              <label class="form-check-label" for="flexCheckDisabled">
                Mode multi-équipe
              </label>
            </div>

            <!--Verify is the confidential mode is checked-->
            <div class="form-check">
              <?php
                if ($confidential==2) {
              ?>
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled checked>
              <?php
                } else {
              ?>
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled> 
              <?php
                }
              ?>
              <label class="form-check-label" for="flexCheckDisabled">
                Mode confidentiel
              </label>
            </div>

            <!--Verify is the project has been accepted by an admin-->
            <div class="form-check">
              <?php
                if ($valide==1) {
              ?>
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled checked>
              <?php
                } if ($valide!=5) {
              ?>
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled> 
              <label class="form-check-label" for="flexCheckDisabled">
                Validé
              </label>
              <?php
              }
              ?>
            </div>

            <!--Add a space-->
            <p></p>
            
            <!--Add the file-->
            <?php $file="{$name}_{$creator_fname}_{$creator_lname}";?>
            <a href="uploads/download_pdf.php?file=<?php echo $file ?>" class="btn btn-primary">Get the pdf file</a>
            <?php
            if ($valide==5) {
            ?>
            <p style="color: red;">PROJET REJETÉ</p>
            <?php
            }
            ?>
          </div>
        </div>
    <?php
      }
    }
  } else
    echo "Erreur dans l'execution de la commande SQL";

?>

<?php
  include('basdepage.inc.php')
?>