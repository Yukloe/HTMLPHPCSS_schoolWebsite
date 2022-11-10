<?php
  $titre = "Page d'inscription";
  include('header.inc.php')
?>
<?php
  include('nav.inc.php')
?>

<?php
  if($_SESSION["role"]=="tut" || $_SESSION["role"]=="adm"){
      // Contenu du formulaire :
    $name =  htmlentities($_POST['name']);
    $description = htmlentities($_POST['description']);
    $multi = htmlentities($_POST['multi']);
    $confidential = htmlentities($_POST['confidential']);
    $creator_id = htmlentities($_POST['creator_id']);
    $project_id = htmlentities($_POST['project_id']);
?>

<form  method="POST" action="tt_modify_project.php" enctype="multipart/form-data">
  <div class="container">

    <div class="row my-2">
      <label for="nom" class="form-label">Nom du projet</label>
      <input type="text" class="form-control " id="name" name="name" placeholder="Le nom du projet..." value="<?php echo $name ?>" required disabled>
    </div> 

    <div class="row my-2">
      <label for="description" class="form-label">Description rapide du programme</label>
      <textarea class="form-control" id="description" name="description" rows="3" placeholder="La description rapide du programme..." required><?php echo $description ?></textarea>
    </div>

    <div class="row my-2">
      <label for="multi" class="form-label">Mode deux équipes</label>
      <select class="form-select" name="multi" aria-label="Default select example">
        <?php
          if ($multi==1) { ?>
            <option value=1 selected>non-activé</option>
            <option value=2>activé</option> <?php
          } else { ?>
            <option value=1>non-activé</option>
            <option value=2 selected>activé</option> <?php
          } ?>
      </select>
    </div>

    <div class="row my-2">
      <label for="confidential" class="form-label">Mode confidentiel</label>
      <select class="form-select" name="confidential" aria-label="Default select">
        <?php
          if ($confidential==1) { ?>
            <option value=1 selected>non-activé</option>
            <option value=2>activé</option> <?php
          } else { ?>
            <option value=1>non-activé</option>
            <option value=2 selected>activé</option> <?php
          } ?>
      </select>
    </div>

    <div class="row my-2" style="margin: 4px 0;">
      <input type="hidden" name="MAX_FILE_SIZE" value="524288" /> 
      <input type="file" name="pdfFile" id="pdfFile" required/>
      <button type="submit" value="Upload file" class="btn btn-primary" style="margin: 8px 0;">Envoyer la modification</button>
    </div>
  </div>

  <input type="hidden" name="name" value="<?=$name?>">
  <input type="hidden" name="project_id" value="<?=$project_id?>">

</form>

<?php
  }else{
?>

<p>
        Vous n'avez pas les droits ici voyons !
      </p>

<?php
  }
?> 

<?php
  include('basdepage.inc.php')
?>