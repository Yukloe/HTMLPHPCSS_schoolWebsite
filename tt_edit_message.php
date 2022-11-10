<?php
  include('header.inc.php')
?>

<?php
  include('nav.inc.php')
?>

<?php 
  // form data
  $id =  htmlentities($_POST['id']);
  $action =  htmlentities($_POST['action']);
?>

<form action="tt_set_message.php" method="post">
<?php 
  if($action=="delete") {
    ?><p>Pourquoi le projet va-t'il être rejeté ?</p><?php
  } 
  else {
    ?><p>Pourquoi le tuteur doit-il modifier son projet ?</p><?php
  }
  ?>

  <div class="container">
    <div class="row my-2">
      <label for="message" class="form-label">Justification</label>
      <textarea class="form-control" id="message" name="message" rows="3" placeholder="Votre justification..." required></textarea>
    </div>
    <input type="hidden" name="id" value="<?=$id?>">
    <input type="hidden" name="action" value="<?=$action?>">
  </div>
  <p></p> <?php
  if($action=="delete") {
    ?><button class="btn btn-primary" type="submit">Supprimer le projet</button><?php
  } 
  else {
    ?><button class="btn btn-primary" type="submit">Envoyer la demande de modification</button><?php
  }
  ?>
</form>

<?php
  include('basdepage.inc.php')
?>