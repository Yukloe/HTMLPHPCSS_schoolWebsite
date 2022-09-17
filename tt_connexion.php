<?php
  session_start(); // Pour les massages

  // Contenu du formulaire :
  $nom =  htmlentities($_POST['nom']);
  $prenom = htmlentities($_POST['prenom']);
  $email =  htmlentities($_POST['email']);
  $password = htmlentities($_POST['password']);
  $role = NULL; // tut pour tuteur, resp pour responsable PING, adm pour admin par exemple :o)

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

  // Faire ici la connexion :

  // Redirection vers la page d'accueil :
  header('Location: index.php');


?>