<?php
  session_start(); // Pour les messages

  // Contenu du formulaire :
  $email =  htmlentities($_POST['email']);
  $password = htmlentities($_POST['password']);

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