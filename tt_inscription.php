<?php
  // Contenu du formulaire :
  $nom =  htmlentities($_POST['nom']);
  $prenom = htmlentities($_POST['prenom']);
  $email =  htmlentities($_POST['email']);
  $password = htmlentities($_POST['password']);
  $entreprise = htmlentities($_POST['entreprise']);
  $role = "vis"; // tut pour tuteur, resp pour responsable PING, adm pour admin par exemple, vis pour visiteur)

  // Option pour bcrypt
  $options = [
        'cost' => 11,
  ];

  // Connexion :
  require_once("param.inc.user.php");
  $mysqli = new mysqli($host, $login, $passwd, $dbname);
  if ($mysqli->connect_error) {
      die('Erreur de connexion (' . $mysqli->connect_errno . ') '
              . $mysqli->connect_error);
  }

  // Attention, ici on ne vérifie pas si l'utilisateur existe déjà
  if ($stmt = $mysqli->prepare("INSERT INTO user(nom, prenom, email, password, role, company) VALUES (?, ?, ?, ?, ?, ?)")) {
    $password = password_hash($password, PASSWORD_BCRYPT, $options);
    $stmt->bind_param("ssssss", $nom, $prenom, $email, $password, $role, $entreprise);
    // Le message est mis dans la session, il est préférable de séparer message normal et message d'erreur.
    if($stmt->execute()) {
        $_SESSION['message'] = "Enregistrement réussi";
        header('Location: index.php');

    } else {
        $_SESSION['message'] =  "Impossible d'enregistrer";
        header('Location: inscription.php');
    }
  }
  // Redirection vers la page d'accueil par exemple :
  


?>