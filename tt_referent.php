<?php
  
  // Contenu du formulaire :
  $email =  htmlentities($_POST['email']);

  // Connexion :
  require_once("param.inc.php");
  $mysqli = new mysqli($host, $login, $passwd, $dbname);
  if ($mysqli->connect_error) {
      die('Erreur de connexion (' . $mysqli->connect_errno . ') '
              . $mysqli->connect_error);
  }

  $email=mysqli_real_escape_string($mysqli,$email);

  $stmt = "UPDATE user SET role='resp' WHERE user.email='{$email}'";
    if ($mysqli->query($stmt) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $mysqli->error;
    }

  header('Location: toactivate.php');
?>