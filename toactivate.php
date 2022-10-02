<?php
  session_start();
?>
<?php
  include('header.inc.php')
?>
<?php
  include('nav.inc.php')
?>

<?php
  // Connexion :
  require_once("param.inc.php");
  $mysqli = new mysqli($host, $login, $passwd, $dbname);
  if ($mysqli->connect_error) {
      die('Erreur de connexion (' . $mysqli->connect_errno . ') '
              . $mysqli->connect_error);
  }else{
    $result = $mysqli->query("SELECT * FROM user WHERE active = 0");
    if(!$result){
      die('Echec de la requête : '.$mysqli->error);
    }elseif($result->num_rows == 0){
      echo '<p>Aucun compte inactif</p>';
    }else{
      $res_fetch = $result->fetch_assoc();
      
?>

<?php
  include('basdepage.inc.php')
?>