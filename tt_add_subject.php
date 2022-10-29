<?php

  include('header.inc.php');

  // Contenu du formulaire :
  $name =  htmlentities($_POST['name']);
  $description = htmlentities($_POST['description']);
  $multi =  filter_input(INPUT_POST, 'multi', FILTER_SANITIZE_STRING);
  $confidential =  filter_input(INPUT_POST, 'confidential', FILTER_SANITIZE_STRING);
  
  // Connexion :
  require_once("param.inc.project.php");
  $mysqli = new mysqli($host, $login, $passwd, $dbname);
  if ($mysqli->connect_error) {
      die('Erreur de connexion (' . $mysqli->connect_errno . ') '
              . $mysqli->connect_error);
  }

  // Attention, ici on ne vérifie pas si le project existe déjà
  if ($stmt = $mysqli->prepare("INSERT INTO project(name, description, multi, confidential, creator_id) VALUES (?, ?, ?, ?, ?)")) {
    $stmt->bind_param("sssss", $name, $description, $multi, $confidential, $_SESSION['id']);
    // Le message est mis dans la session, il est préférable de séparer message normal et message d'erreur.
    if($stmt->execute()) {
      $_SESSION['message'] = "Enregistrement réussi";
      header('Location: index.php');

  } else {
      $_SESSION['message'] =  "Impossible d'enregistrer";
      header('Location: add_subject.php');
  }
}
  // Redirection vers la page d'accueil par exemple :

?>