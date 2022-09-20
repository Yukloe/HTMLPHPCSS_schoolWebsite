<?php
require_once("param.inc.php");
$mysqli = new mysqli($host, $login, $passwd, $dbname);
if ($mysqli->connect_error) {
    die('Erreur de connexion (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);   
            header('Location: checkuremail.php');
}
else{
    header('Location: checkuremail.php');
}
?>
