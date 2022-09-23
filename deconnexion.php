<?php
  $titre = "Page de comptes";
  include('header.inc.php')
?>
<?php
  include('nav.inc.php')
?>

<?php
  session_destroy();
  header('Location: index.php');
?>

<?php
  include('basdepage.inc.php')
?>