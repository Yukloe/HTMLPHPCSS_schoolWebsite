<?php
  // Contenu du formulaire :
  $id =  htmlentities($_POST['id']);

  // Connexion :
  require_once("param.inc.project.php");
  $mysqli = new mysqli($host, $login, $passwd, $dbname);
  if ($mysqli->connect_error) {
      die('Erreur de connexion (' . $mysqli->connect_errno . ') '
              . $mysqli->connect_error);
  }

  $id=mysqli_real_escape_string($mysqli,$id);

  $stmt = "UPDATE project SET valide = 5 WHERE project.id='{$id}'";
    if ($mysqli->query($stmt) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $mysqli->error;
    }

  header('Location: project_management.php');
?>