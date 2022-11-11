<?php
  include('header.inc.php');
?>
<?php
  include('nav.inc.php');
  include('tt_project_rejection.php');
?>

<?php 
  // Data form
  $id =  htmlentities($_POST['id']);
  $action =  htmlentities($_POST['action']);
  $message =  htmlentities($_POST['message']);
?>  

<?php

  // Connexion
  require_once("param.inc.php");
  $mysqli = new mysqli($host, $login, $passwd, $dbname);
  if ($mysqli->connect_error) {
      die('Erreur de connexion (' . $mysqli->connect_errno . ') '
              . $mysqli->connect_error);
  }

  $id=mysqli_real_escape_string($mysqli,$id);
  $message=mysqli_real_escape_string($mysqli,$message);

  // Update admin message
  $stmt = "UPDATE project SET `admin-message` = '{$message}' WHERE project.id='{$id}'";
  if ($mysqli->query($stmt) === TRUE) {
    echo "Record updated successfully";
    // Delete the project
    if ($action=="delete") { 
      delete($id);
    }
    //header('Location: project_management.php');
  } else {
    echo "Error updating record: " . $mysqli->error;
  }
?>

<?php
  include('basdepage.inc.php')
?>