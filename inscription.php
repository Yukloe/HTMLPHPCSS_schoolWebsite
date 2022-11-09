<?php
  $titre = "Page d'inscription";
  include('header.inc.php')
?>
<?php
  include('nav.inc.php')
?>

<?php
/*
  if(isset($_SESSION["email"])){
    */
?> 

<form  method="POST" action="tt_inscription.php">
  <div class="container">
    <div class="row my-2">
      <label for="nom" class="form-label">Nom</label>
      <input type="text" class="form-control " id="nom" name="nom" placeholder="Votre nom..." required>
    </div> 
    <div class="row my-2">
      <label for="prenom" class="form-label">Prénom</label>
      <input type="text" class="form-control " id="prenom" name="prenom" placeholder="Votre prénom..." required>
    </div>
    <div class="row my-2">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control " id="email" name="email" placeholder="Votre email..." required>
    </div>
    <div class="row my-2">
      <label for="password" class="form-label">Mot de passe</label>
      <input type="password" class="form-control " id="password" name="password" placeholder="Votre mot de passe..." required>
    </div>
    <div class="row my-2">
      <label for="entreprise" class="form-label">Entreprise</label>
      <input type="text" class="form-control " id="entreprise" name="entreprise" placeholder="Votre entreprise..." required>
    </div>
    <div class="row my-4">
      <div class="d-grid gap-2 d-md-block"><button class="btn btn-outline-primary" type="submit">Inscription</button></div>   
    </div>
  </div>

</form>

<?php /*
  }else{
    */
?>
<!--
<p>
        Pourquoi créer un compte alors que t'es déjà connecté ?!
      </p>
  -->
<?php
/*
  }
  */
?>

<?php
  include('basdepage.inc.php')
?>