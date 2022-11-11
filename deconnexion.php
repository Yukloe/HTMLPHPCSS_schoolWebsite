<?php
  $titre = "Page de comptes";
  include('header.inc.php')
?>
<?php
  include('nav.inc.php')
?>

<?php
  if(isset($_SESSION["email"])){
?> 

<?php
  unset($_SESSION['email']);
  unset($_SESSION['prenom']);
  unset($_SESSION['nom']);
  unset($_SESSION['role']);
  unset($_SESSION['id']);
  $_SESSION['message'] = "Déconnexion réussie";
  header('Location: index.php');
?>

<?php
  }else{
?>

<p>
        Vous n'êtes même pas connecté !
      </p>

<?php
  }
?>

<?php
  include('basdepage.inc.php')
?>