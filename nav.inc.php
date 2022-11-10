<nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"></a>
          <img src="images/logo/ESIGPING.png" class="img-fluid" alt="logo ESIGPING" style="width:15%">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
              </li>
              <?php
              if(isset($_SESSION["email"])){
              ?>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="deconnexion.php">Deconnexion</a>
              </li>
              <?php
              if($_SESSION["role"]=="adm" || $_SESSION["role"]=="tut"){
              ?>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="my_projects.php">Liste de mes projets</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="add_subject.php">Ajouter un projet</a>
              </li>
              <?php
              }
              if($_SESSION["role"]=="adm" || $_SESSION["role"]=="resp"){
              ?>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="public_projects.php">Liste des projets publics</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="project_management.php">Gestion des projects</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="toactivate.php">Activation des comptes</a>
              </li>
              <?php
              }if($_SESSION["role"]=="adm"){
                ?>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="toPutreferent.php">Definir comme referent</a>
                </li>
                <?php
                }
              ?>
              <?php
              }else{
              ?>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="inscription.php">Inscription</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="connexion.php">Connexion</a>
              </li>
              <?php
              }
              ?>
              
          

            <form class="d-flex">
              <a href="https://esigelec.fr/fr">
                <img src="images/logo/Logo_ESIGELEC.svg" class="img-fluid" alt="logo ESIGELEC">  
              </a>
            </form>

          </div>
        </div>
</nav>

<?php         
  if(isset($_SESSION['message'])){
    echo "<div class='alert alert-warning' role='alert'>" . $_SESSION['message'] . "</div>";
    unset($_SESSION['message']);
  }
  ?>