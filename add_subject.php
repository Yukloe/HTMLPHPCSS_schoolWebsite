<?php
  $titre = "Page d'inscription";
  include('header.inc.php')
?>
<?php session_start()?>
<?php
  include('nav.inc.php')
?>

<form  method="POST" action="tt_inscription.php">
  <div class="container">
    <div class="row my-2">
      <label for="nom" class="form-label">Nom du projet</label>
      <input type="text" class="form-control " id="project-name" name="project-name" placeholder="Le nom du projet..." required>
    </div> 
    <div class="row my-2">
      <label for="quick-desc" class="form-label">Description rapide du programme</label>
      <textarea class="form-control" id="quick-desc" rows="3" placeholder="La description rapide du programme..." required></textarea>
    </div>
    <div class="row my-2">
      <label for="quick-desc" class="form-label">Mode deux équipes</label>
      <select class="form-select" aria-label="Default select example">
        <option selected>Choisissez une option</option>
        <option value="1">non-activé</option>
        <option value="2">activé</option>
      </select>
    </div>
    <div class="row my-2">
      <label for="quick-desc" class="form-label">Mode confidentiel</label>
      <select class="form-select" aria-label="Default select example">
        <option selected>Choisissez une option</option>
        <option value="1">non-activé</option>
        <option value="2">activé</option>
      </select>
    </div>
    <div class="row my-2">
      <label for="image-project" class="form-label">Image du projet</label>
      <input class="form-control" type="file" id="image-project">
    </div>
    <div class="row my-2">
      <label for="desc-project" class="form-label">Description détaillée du projet</label>
      <input class="form-control" type="file" id="desc-project">
    </div>
    <div class="row my-2">
        <button type="submit" class="btn btn-primary">Envoyer la demande</button>
    </div>
  </div>

</form>

<?php
  include('basdepage.inc.php')
?>