<?php
  include('header.inc.php')
?>
<?php
  include('nav.inc.php')
?>

<?php 
  // Contenu du formulaire :
  $id =  htmlentities($_POST['id']);
  $action =  htmlentities($_POST['action']);
  $message =  htmlentities($_POST['message']);
?>  

<?php

  // Connexion :
  require_once("param.inc.php");
  $mysqli = new mysqli($host, $login, $passwd, $dbname);
  if ($mysqli->connect_error) {
      die('Erreur de connexion (' . $mysqli->connect_errno . ') '
              . $mysqli->connect_error);
  }

  $id=mysqli_real_escape_string($mysqli,$id);

  $stmt = "UPDATE project SET `admin-message` = '{$message}' WHERE project.id='{$id}'";
  if ($mysqli->query($stmt) === TRUE) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . $mysqli->error;
  }

  // Delete the project
  if ($action=="delete") { ?>
    <form action="tt_project_rejection.php" method="post">
        <input type="hidden" name="id" value="<?=$id?>">
        <button class="btn btn-primary" type="submit">Valider le compte</button>
    </form>
  <?php
    }
     //header('Location: project_management.php');
    ?>

<?php
  include('basdepage.inc.php')
?>