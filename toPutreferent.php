<?php
  include('header.inc.php')
?>
<?php
  include('nav.inc.php')
?>

<div class=container>
  <h1>Liste des comptes</h1>
</div>

<?php
  // Connexion :
  require_once("param.inc.php");
  $mysqli = new mysqli($host, $login, $passwd, $dbname);
  if ($mysqli->connect_error) {
      die('Erreur de connexion (' . $mysqli->connect_errno . ') '
              . $mysqli->connect_error);
  }
  
  // Execution
  if ($stmt = $mysqli->prepare("SELECT nom, prenom, email FROM `user` WHERE role LIKE 'tut'")){
    $stmt->execute();
    $stmt->bind_result($nom, $prenom, $email);
    $index=1;
    while ($stmt->fetch()) { ?>
        <div class="card" style="margin : 10px 20px 0 15px;">
          <div class="card-body">
            <h5 class="card-title">Demande d'inscription n°<?= $index ?></h5>
            <?php $index+=1; ?>
            <p class="card-text">
                Prénom : <?= $prenom ?> <br>
                Nom : <?= $nom ?> <br>
                Email : <?= $email ?> <br>
            </p>
            <form action="tt_referent.php" method="post">
              <input type="hidden" name="email" value="<?=$email?>">
              <button class="btn btn-primary" type="submit">Valider le compte</button>
            </form>

          </div>
        </div>
    <?php
    }

  } else
    echo "Erreur dans l'execution de la commande SQL";

?>

<?php
  include('basdepage.inc.php')
?>