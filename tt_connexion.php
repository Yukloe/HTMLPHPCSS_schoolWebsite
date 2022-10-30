<?php
    //On démarre une nouvelle session
    session_start();
    /*On utilise session_id() pour récupérer l'id de session s'il existe.
     *Si l'id de session n'existe  pas, session_id() rnevoie une chaine de caractères vide*/
    $id_session = session_id();
?>

<?php
  // Contenu du formulaire :
  $email =  htmlentities($_POST['email']);
  $password = htmlentities($_POST['password']);

  $email = stripcslashes($email);
  $password = stripcslashes($password);

  // Connexion :
  require_once("param.inc.user.php");
  $mysqli = new mysqli($host, $login, $passwd, $dbname);

  $email = $mysqli -> real_escape_string($email);
  $password = $mysqli -> real_escape_string($password);

  if ($mysqli->connect_error) {
      die('Erreur de connexion (' . $mysqli->connect_errno . ') '
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
          $_SESSION['email'] = $email;
          $_SESSION['prenom'] = $res_fetch["prenom"];
          $_SESSION['role'] = $res_fetch["role"];
          $_SESSION['id'] = $res_fetch["id"];
          header('Location: account.php');
        } else {
          echo '<p>Une étude du compte est déjà en cours</p>';
          header('Location: connexion.php');
        }
      }
      else{
        echo '<p>Mot de passe non valide (ou juste code non fonctionnel)</p>';
        header('Location: connexion.php');
      }
    }
  }
 
?>