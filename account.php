<?php
  $titre = "Page de comptes";
  include('header.inc.php')
?>
<?php
  include('nav.inc.php')
?>

<?php
  echo 'Bonjour ' .$_SESSION['prenom'].'';
?>

<?php
  include('basdepage.inc.php')
?>