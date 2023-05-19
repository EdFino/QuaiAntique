<?php
session_start();
ob_start();
?>

<h2>Bienvenue <?php
require 'models/reservationDisplay.php';

    if (isset($_SESSION['role'])) {
        if ($_SESSION['role'] === 'customer') {
          { echo  $_SESSION['name'] . '</br>'; } } } ?>
          </h2>
          <?php
          if (isset($_SESSION['role'])) {
        if ($_SESSION['role'] === 'customer') {
          displayReservationCustomer(); } }?>

<div class="container">
        <div class="alert alert-danger" role="alert">
        Notre chef Arnaud Michant est revenu sur ses terres natales après une carrière splendide qui fait de lui un des chefs les plus côtés de notre époque. 
        Sa vision : faire renaître les recettes ancestrales de Savoie et Haute-Savoie à sa sauce, afin de faire profiter à tous de la diversité culinaire de sa région. 
        Le Quai Antique est la recréation de ces saveurs adorées, entre tradition et modernité, portées à leur plus-haute qualité. 
        Un service impeccable et une haute-cuisine gourmande rendront votre repas inoubliable.
        </div>
    </div>

<div style = "text-align:center;">
<?php if (isset($_SESSION['role'])) { echo '<button type="button" class="btn btn-danger" onclick="window.location.href = \'deconnexion\'";>Se déconnecter</button><br/>'; } ?>

<?php  require_once 'models/displayImages.php';
displayImages(); ?>


<button type="button" class="btn btn-danger onclick=" onclick="window.location.href = 'reservation' ">Réservation</button><br/>

  <div class="container carte" id="card">
    <h2>Le Quai Antique vous présente</h2>

    <?php
      require_once 'models/displayCard.php';

            displayCard('Entrée');
            displayCard('Plat');
            displayCard('Dessert');
            displayCard('Boisson'); ?>

  </div>

  <div class="flexTime" id="menu">
  <div class="card" style="width: 18rem;">
  <img src="view/images/croziflette.jpg" class="card-img-top" alt="menu enfant croziflette">
  <div class="card-body">
    <h5 class="card-title">Menu enfant "Savoie Bien"<br/><span class ="important">25€</span></h5>
    <p class="card-text">Entrée : Mini-Tourtes</br>
Plat de résistance : Croziflettes</br>
Boisson : Yaute Cola</br>
</p>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="view/images/welsh.jpg" class="card-img-top" alt="menu enfant croziflette">
  <div class="card-body">
    <h5 class="card-title">Menu enfant "Savoie Bien"<br/><span class ="important">25€</span></h5>
    <p class="card-text">Entrée : Mini-Tourtes</br>
Plat de résistance : Croziflettes</br>
Boisson : Yaute Cola</br>
</p>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img src="view/images/fondue.jpg" class="card-img-top" alt="menu enfant croziflette">
  <div class="card-body">
    <h5 class="card-title">Menu enfant "Savoie Bien"<br/><span class ="important">25€</span></h5>
    <p class="card-text">Entrée : Mini-Tourtes</br>
Plat de résistance : Croziflettes</br>
Boisson : Yaute Cola</br>

</p>
  </div>
</div>
  </div>
  <?php

  $content = ob_get_clean();

  require_once "view/layout.php"; ?>