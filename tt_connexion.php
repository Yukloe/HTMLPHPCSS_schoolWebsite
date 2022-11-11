<?php
    //Start a new SESSION
    session_start();
?>

<?php
  // data form
  $email =  htmlentities($_POST['email']);
  $password = htmlentities($_POST['password']);
  $email = stripcslashes($email);
  $password = stripcslashes($password);

  // connexion
  require_once("param.inc.php");
  $mysqli = new mysqli($host, $login, $passwd, $dbname);
  $email = $mysqli -> real_escape_string($email);
  $password = $mysqli -> real_escape_string($password);

  if ($mysqli->connect_error) {
      die('Erreur de connection (' . $mysqli->connect_errno . ') '
              . $mysqli->connect_error);
  }else{
    $result = $mysqli->query("SELECT * FROM user WHERE email = '$email'");
    if(!$result){
      die('Echec de la requête : '.$mysqli->error);
    }elseif($result->num_rows == 0){
      echo '<p>Aucun compte relié à cette email</p>';
      header('Location: connexion.php');
    }else{
      $res_fetch = $result->fetch_assoc();
      if(password_verify($password, $res_fetch["password"])){
        if($res_fetch["active"]==1) {

          // add data to current SESSION
          $_SESSION['email'] = $email;
          $_SESSION['prenom'] = $res_fetch["prenom"];
          $_SESSION['nom'] = $res_fetch["nom"];
          $_SESSION['role'] = $res_fetch["role"];
          $_SESSION['id'] = $res_fetch["id"];
          header('Location: index.php');
          $_SESSION['message'] = "Connection autorisée";

        } else {
          $_SESSION['message'] = "Erreur : Votre compte n'est pas encore activé";
          header('Location: connexion.php');
        }
      }
      else{
        $_SESSION['message'] = "Erreur : Mauvais mot de passe";
        header('Location: connexion.php');
      }
    }
  }
?>