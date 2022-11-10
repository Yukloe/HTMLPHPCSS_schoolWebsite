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
  session_destroy();
  $_SESSION['message'] = "Deonnexion réussi";
  $msg = $_SESSION['message'];
  echo "<div class='msgbox'>" . $msg . "</div>";
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