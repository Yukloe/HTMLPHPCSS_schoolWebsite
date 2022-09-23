<nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">LOGO ESIG'PING</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="test.php">Test</a>
              </li>
              <?php
              if(isset($_SESSION["email"])){
              ?>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="account.php">Mon compte</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="deconnexion.php">Deconnexion</a>
              </li>
              <?php
              if($_SESSION["role"]=="adm" || $_SESSION["role"]=="tut"){
              ?>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="projects.php">Liste de mes projets</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="add_subject.php">Ajouter un projet</a>
              </li>
              <?php
              }
              if($_SESSION["role"]=="adm" || $_SESSION["role"]=="resp"){
              ?>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="projects.php">Liste des projets</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="toactivate.php">Comptes à activer</a>
              </li>
              <?php
              }
              ?>
              <?php
              }else{
              ?>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="inscription.php">Inscription</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="connexion.php">Connexion</a>
              </li>
              <?php
              }
              ?>
              
          

            <form class="d-flex">
              <a href="https://esigelec.fr/fr">
                <img src="images/logo/Logo_ESIGELEC.svg" alt="logo ESIGELEC" >  
              </a>
            </form>

          </div>
        </div>
</nav>