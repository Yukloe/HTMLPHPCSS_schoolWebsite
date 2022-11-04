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
  echo 'Bonjour ' .$_SESSION['prenom'].'';
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