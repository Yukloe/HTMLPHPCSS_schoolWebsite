<?php
  // import the current session
  include('header.inc.php');

  // form data
  $name =  htmlentities($_POST['name']);
  $description = htmlentities($_POST['description']);
  $multi = htmlentities($_POST['multi']);
  $confidential = htmlentities($_POST['confidential']);
  $project_id = htmlentities($_POST['project_id']);

  // connexion 
  require_once("param.inc.php");
  $mysqli = new mysqli($host, $login, $passwd, $dbname);
  if ($mysqli->connect_error) {
      die('Erreur de connexion (' . $mysqli->connect_errno . ') '
              . $mysqli->connect_error);
  }

  // convert data to insert in sql request
  $name=mysqli_real_escape_string($mysqli,$name);
  $description=mysqli_real_escape_string($mysqli,$description);
  $multi=mysqli_real_escape_string($mysqli,$multi);
  $confidential=mysqli_real_escape_string($mysqli,$confidential);
  $project_id=mysqli_real_escape_string($mysqli,$project_id);

  // insert UPDATE request
  $stmt = "UPDATE project SET `description` = '{$description}', `multi` = '{$multi}', `confidential` = '{$confidential}' WHERE id='{$project_id}'";
  if ($mysqli->query($stmt) === TRUE) {
    echo "Record updated successfully";

    // update the file
    $_SESSION['message'] = "Enregistrement réussi";
    if ( isset( $_FILES['pdfFile'] ) ) {
      if ($_FILES['pdfFile']['type'] == "application/pdf") {
        $source_file = $_FILES['pdfFile']['tmp_name'];
        $_FILES['pdfFile']['name']="{$name}_{$_SESSION['prenom']}_{$_SESSION['nom']}.pdf";
        $dest_file = "uploads/".$_FILES['pdfFile']['name'];
        move_uploaded_file( $source_file, $dest_file )
        or die ("Error!!");

        if($_FILES['pdfFile']['error'] == 0) {
          print "Pdf file uploaded successfully!\n";
          print "<b><u>Details : </u></b><br/>";
          print "File Name : ".$_FILES['pdfFile']['name']."<br.>"."<br/>";
          print "File Size : ".$_FILES['pdfFile']['size']." bytes"."<br/>";
          print "File location : upload/".$_FILES['pdfFile']['name']."<br/>";
          header('Location: index.php');
        }
      }
        } else {
          if ( $_FILES['pdfFile']['type'] != "application/pdf") {
              print "Error occured while uploading file : ".$_FILES['pdfFile']['name']."<br/>";
              print "Invalid  file extension, should be pdf !!"."<br/>";
              print "Error Code : ".$_FILES['pdfFile']['error']."<br/>";
          }
        }
    header('Location: my_projects.php');
  } else {
    echo "Error updating record: " . $mysqli->error;
    $_SESSION['message'] =  "Impossible d'enregistrer";
  }

?>