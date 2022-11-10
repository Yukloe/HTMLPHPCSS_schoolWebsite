<?php
  $titre = "Header";
  include('header.inc.php')
?>
<?php
  include('nav.inc.php')
?>

<div class="container">

      <!-- Titre principal -->
      <h1>Projet PING : Site de dépôt de projets</h1>

      <p>
        Bienvenue sur ce site de depot et de vérification de projets, au service de l'ESIGELEC. 

        Sur ce site, vous serez capable de déposer différent projets qui seront par la suite vérifié par des responsables PING.

        Afin d'acceder aux différentes fonctionnalités, vous pouvez vous connecter en utilisant le burger de navigation en haut à droite.
      </p>

      <!-- Cette partie est réservée au caroussel -->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/carrousel/company.jpg" class="w-auto p-3" alt="Photo esig 1"/>
          <div class="carousel-caption d-none d-md-block">
              <h5>L'Ecole Supérieure d'ingénieur en génie électrique</h5>
              <p>Ecole d'ingénieur abbritant un démon du nom de "Charnacé". Bien que ce ne soit qu'une légende, des traumatisés érrandes bien les couloirs...</p>
          </div>
          </div>
          <div class="carousel-item">
          <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">
            <img src="images/carrousel/construction_project.jpg" class="w-auto p-3" alt="Photo Bro" >
          </a>
          <div class="carousel-caption d-none d-md-block">
              <h5>American exchanged student: Leafwood-pretty</h5>
              <p>"Une école incredible qui m'a donné des stars dans les yeux... presque autant que ceux de mon drapeau : l'A-ME-RIQUE"</p>
          </div>
          </div>
          <div class="carousel-item">
            <img src="images/carrousel/construction_site.jpg" class="w-auto p-3" alt="Photo projet PING 1"/>
          <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
          </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>      

      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>
  </body>
</html>

<?php
  include('basdepage.inc.php')
?>
