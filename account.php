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
  echo 'Bonjour ' .$_SESSION['prenom'].' , votre rôle est ' .$_SESSION['role'].' et votre email renseignée est ' .$_SESSION['email'].'';
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