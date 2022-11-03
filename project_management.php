<?php
  $titre = "Page de projets";
  include('header.inc.php')
?>

<?php
  include('nav.inc.php')
?>

<div class=container>
  <h1>Gestion des projets</h1>
</div>

<?php
  
  // Connexion :
  require_once("param.inc.project.php");
  $mysqli = new mysqli($host, $login, $passwd, $dbname);
  if ($mysqli->connect_error) {
      die('Erreur de connexion (' . $mysqli->connect_errno . ') '
              . $mysqli->connect_error);
  }

  // Execution
  if ($stmt = $mysqli->prepare("SELECT id, name, description, multi, confidential, valide, creator_id FROM `project`")){
    $stmt->execute();
    $stmt->bind_result($id, $name, $description, $multi, $confidential, $valide, $creator_id);
    $index=1;
    while ($stmt->fetch()) { ?>
        <div class="card" style="margin : 10px 20px 0 15px;">
          <div class="card-body">
            <!--Add the name-->
            <h5 class="card-title">Projet n°<?= $index; ?></h5>
      
            <!--Add the data-->
            <p class="card-text">
              <?= $name; ?></br>
              <?= $description; ?>
            </p>
            
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
                } else {
              ?>
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" disabled> 
              <?php
                }
              ?>
              <label class="form-check-label" for="flexCheckDisabled">
                Validé
              </label>
            </div>
            <!--Add a space-->
            <p></p>
            
            <!--Add the file-->

            <a href="#" class="btn btn-primary">Obtenir le fichier pdf</a>

            <?php if ($valide==0) { ?>
              <!-- Validate projects-->
              <form action="tt_project_validation.php" method="post" style="margin: 4px 0;">
                <input type="hidden" type name="id" value="<?=$id?>">
                <button class="btn btn-primary" type="submit">Valider le projet</button>
              </form>

              <!-- Ask to modify projects-->
              <form action="tt_edit_message.php" method="post" style="margin: 4px 0;">
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="hidden" name="action" value="modify">
                <button class="btn btn-primary" type="submit">Demander une modification du projet</button>
              </form>

              <!-- Reject projects-->
              <form action="tt_edit_message.php" method="post" style="margin: 4px 0;">
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="hidden" name="action" value="delete">
                <button class="btn btn-primary" type="submit">Rejeter le projet</button>
              </form>

            <?php } else if ($valide==1){ ?>
              <!-- Delete projects-->
              <form action="tt_edit_message.php" method="post" style="margin: 4px 0;">
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="hidden" name="action" value="delete">
                <button class="btn btn-primary" type="submit">Supprimer le projet</button>
              </form>
            <?php } else {?>
              <p style="color: red;">PROJET REJETÉ</p>
            <?php }?>
          </div>
        </div>

    <?php $index+=1;
    }    
  } else
    echo "Erreur dans l'execution de la commande SQL";

?>

<?php
  include('basdepage.inc.php')
?>