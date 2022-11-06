<?php

  function delete($id)
  {
    // Connexion
    include("param.inc.php");
    $mysqli = new mysqli($host, $login, $passwd, $dbname);
    if ($mysqli->connect_error) {
        die('Erreur de connexion (' . $mysqli->connect_errno . ') '
                . $mysqli->connect_error);
    }

    // Reject project
    $stmt = "UPDATE project SET valide = 5 WHERE project.id='{$id}'";
      if ($mysqli->query($stmt) === TRUE) {
          echo "Delete updated successfully";
      } else {
          echo "Error updating delete: " . $mysqli->error;
      }

    }
  header('Location: project_management.php');
?>