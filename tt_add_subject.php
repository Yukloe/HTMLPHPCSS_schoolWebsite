<?php
  session_start(); // Pour les messages

  // Contenu du formulaire :
  $name =  htmlentities($_POST['name']);
  $description = htmlentities($_POST['description']);
  $multi =  htmlentities($_POST['multi']);
  $confidential = htmlentities($_POST['confidential']);
  $creator_id = htmlentities($_POST['creator_id']);
  $role = "tut"; // tut pour tuteur, resp pour responsable PING, adm pour admin par exemple, vis pour visiteur)

  // Option pour bcrypt
  $options = [
        'cost' => 11,
  ];

  // Connexion :
  require_once("param.inc.php");
  $mysqli = new mysqli($host, $login, $passwd, $dbname);
  if ($mysqli->connect_error) {
      die('Erreur de connexion (' . $mysqli->connect_errno . ') '
              . $mysqli->connect_error);
  }

  // Attention, ici on ne vérifie pas si le sujet existe déjà
  if ($stmt = $mysqli->prepare("INSERT INTO project(name, description, multi, confidential, creator_id) VALUES (?, ?, ?, ?, ?)")) {

    // Le message est mis dans la session, il est préférable de séparer message normal et message d'erreur.
    if($stmt->execute()) {
        print($multi);
        //$_SESSION['message'] = "Enregistrement réussi";
        header('Location: checkurmulti.php');

    } else {
        $_SESSION['message'] =  "Impossible d'enregistrer";
        header('Location: add_subject.php');
    }
  }
  // Redirection vers la page d'accueil par exemple :
?>