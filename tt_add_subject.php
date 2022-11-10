<?php

  // import session
  include('header.inc.php');

  // form data
  $name =  htmlentities($_POST['name']);
  $description = htmlentities($_POST['description']);
  $multi =  filter_input(INPUT_POST, 'multi', FILTER_SANITIZE_STRING);
  $confidential =  filter_input(INPUT_POST, 'confidential', FILTER_SANITIZE_STRING);

  // connexion
  require_once("param.inc.php");
  $mysqli = new mysqli($host, $login, $passwd, $dbname);
  if ($mysqli->connect_error) {
      die('Erreur de connexion (' . $mysqli->connect_errno . ') '
              . $mysqli->connect_error);
  }

  // INSERT sql request
  if ($stmt = $mysqli->prepare("INSERT INTO project(name, description, multi, confidential, creator_id) VALUES (?, ?, ?, ?, ?)")) {
    $stmt->bind_param("sssss", $name, $description, $multi, $confidential, $_SESSION['id']);
    if($stmt->execute()) {
      $_SESSION['message'] = "Enregistrement réussi";
        
      // param upload file
      if ( isset( $_FILES['pdfFile'] ) ) {
        if ($_FILES['pdfFile']['type'] == "application/pdf") {
          $source_file = $_FILES['pdfFile']['tmp_name'];
          $_FILES['pdfFile']['name']="{$name}_{$_SESSION['prenom']}_{$_SESSION['nom']}.pdf";
          $dest_file = "uploads/".$_FILES['pdfFile']['name'];
      
          if (file_exists($dest_file)) {
            print "The file name already exists!!";
          } else {
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
      }
    } else {
        $_SESSION['message'] =  "Impossible d'enregistrer";
        header('Location: add_subject.php');
    }
  }
?>