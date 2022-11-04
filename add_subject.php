<?php
  $titre = "Page d'inscription";
  include('header.inc.php')
?>
<?php
  include('nav.inc.php')
?>

<?php
  if($_SESSION["role"]=="tut" || $_SESSION["role"]=="adm"){
?>

<form  method="POST" action="tt_add_subject.php">
  <div class="container">

    <div class="row my-2">
      <label for="nom" class="form-label">Nom du projet</label>
      <input type="text" class="form-control " id="name" name="name" placeholder="Le nom du projet..." required>
    </div> 

    <div class="row my-2">
      <label for="description" class="form-label">Description rapide du programme</label>
      <textarea class="form-control" id="description" name="description" rows="3" placeholder="La description rapide du programme..." required></textarea>
    </div>

    <div class="row my-2">
      <label for="multi" class="form-label">Mode deux équipes</label>
      <select class="form-select" name="multi" aria-label="Default select example">
        <option selected>Choisissez une option</option>
        <option value=1>non-activé</option>
        <option value=2>activé</option>
      </select>
    </div>

    <div class="row my-2">
      <label for="confidential" class="form-label">Mode confidentiel</label>
      <select class="form-select" name="confidential" aria-label="Default select example">
        <option selected>Choisissez une option</option>
        <option value=1>non-activé</option>
        <option value=2>activé</option>
      </select>
    </div>

    <div class="row my-2">
        <button type="submit" class="btn btn-primary">Envoyer la demande</button>
    </div>
  </div>
</form>

<?php
  }else{
?>

<p>
        Vous n'avez pas les droits ici voyons !
      </p>

<?php
  }
?> 

<?php
  include('basdepage.inc.php')
?>