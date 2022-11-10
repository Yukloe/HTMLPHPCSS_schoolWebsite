<?php
    //Start a new SESSION
    $id_session = session_id();
?>

<?php
  // data form
  $nom =  htmlentities($_POST['nom']);
  $prenom = htmlentities($_POST['prenom']);
  $email =  htmlentities($_POST['email']);
  $password = htmlentities($_POST['password']);
  $entreprise = htmlentities($_POST['entreprise']);
  $role = "vis";

  // bcrypt option 
  $options = [
        'cost' => 11,
  ];

  // connexion 
  require_once("param.inc.php");
  $mysqli = new mysqli($host, $login, $passwd, $dbname);
  if ($mysqli->connect_error) {
      die('Erreur de connexion (' . $mysqli->connect_errno . ') '
              . $mysqli->connect_error);
  }

  // INSERT sql request
  if ($stmt = $mysqli->prepare("INSERT INTO user(nom, prenom, email, password, role, company) VALUES (?, ?, ?, ?, ?, ?)")) {
    $password = password_hash($password, PASSWORD_BCRYPT, $options);
    $stmt->bind_param("ssssss", $nom, $prenom, $email, $password, $role, $entreprise);

    if($stmt->execute()) {
        $_SESSION['message'] = "Enregistrement réussi";
        header('Location: index.php');

    } else {
        $_SESSION['message'] =  "Impossible d'enregistrer";
        header('Location: inscription.php');
    }
  }
?>