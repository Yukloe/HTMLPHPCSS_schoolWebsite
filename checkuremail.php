<?php
  $titre = "Page de comptes";
  include('header.inc.php')
?>
<?php session_start()?>
<?php
  include('nav.inc.php')
?>

<p>
        Veuillez vérifier votre addresse-mail, puis retourner à l'accueil
      </p>
      <a class="btn btn-danger btn-lg" href="index.php" role="button">Accueil</a>

<?php
  include('basdepage.inc.php')
?>