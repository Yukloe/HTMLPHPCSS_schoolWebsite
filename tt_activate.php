<?php
  
  // form data
  $email =  htmlentities($_POST['email']);

  // connexion
  require_once("param.inc.php");
  $mysqli = new mysqli($host, $login, $passwd, $dbname);
  if ($mysqli->connect_error) {
      die('Erreur de connexion (' . $mysqli->connect_errno . ') '
              . $mysqli->connect_error);
  }

  // convert data to insert in sql request
  $email=mysqli_real_escape_string($mysqli,$email);

  // UPDATE sql request
  $stmt = "UPDATE user SET active = 1, role='tut' WHERE user.email='{$email}'";
    if ($mysqli->query($stmt) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $mysqli->error;
    }

  header('Location: toactivate.php');
?>