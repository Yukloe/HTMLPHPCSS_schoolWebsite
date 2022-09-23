<?php
  // Contenu du formulaire :
  $email =  htmlentities($_POST['email']);
  $password = htmlentities($_POST['password']);

  //$email = stripcslashes($email);
  //$password = stripcslashes($password);
  //$email = $mysqli -> real_escape_string($email);
  //$password = $mysqli -> real_escape_string($password);

  // Connexion :
  require_once("param.inc.php");
  $mysqli = new mysqli($host, $login, $passwd, $dbname);
  if ($mysqli->connect_error) {
      die('Erreur de connexion (' . $mysqli->connect_errno . ') '
              . $mysqli->connect_error);
  }else{
    $result = $mysqli->query("SELECT * FROM user WHERE email = '$email'");
    if(!$result){
      die('Echec de la requête : '.$mysqli->error);
    }elseif($result->num_rows == 0){
      echo '<p>Aucun compte relié à cette email</p>';
    }else{
      $hash = $result->fetch_assoc();
      if(password_verify($password, $hash["password"])){
        echo 'Connexion réussie !';
        header('Location: account.php');
      }
      else{
        echo '<p>Mot de passe non valide (ou juste code non fonctionnel)</p>';
        header('Location: connexion.php');
      }
    }
  }
 
?>