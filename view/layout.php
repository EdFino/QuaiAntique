<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Au Quai Antique</title>
    <link rel="stylesheet" href="view/bootstrap/css/bootstrap.min.css">
    <link rel="shortcut icon" href="view/logo/q.jpg">
    <link href="view/style.css" rel="stylesheet">
  </head>

  <body>
    
    <header>
    <div id="presentation">
  <img id="headImage" src="view/logo/quaiantique.jpg" class="img-fluid" class alt="presentation du restaurant">
  <div id="navbar">
    <ul id="nav">
      <li>La Carte</li>
      <li>Les Menus</li>
      <li>Horaires</li>
    </ul>
  </div>
</div>
    <div class="container">
    <img src="view/logo/quaiantique.jpg" class="img-fluid" class alt="presentation du restaurant">
        <h1>Au Quai Antique</h1>
        <div class="alert alert-danger" role="alert">
        Notre chef Arnaud Michant est revenu sur ses terres natales après une carrière splendide qui fait de lui un des chefs les plus côtés de notre époque. 
        Sa vision : faire renaître les recettes ancestrales de Savoie et Haute-Savoie à sa sauce, afin de faire profiter à tous de la diversité culinaire de sa région. 
        Le Quai Antique est la recréation de ces saveurs adorées, entre tradition et modernité, portées à leur plus-haute qualité. 
        Un service impeccable et une haute-cuisine gourmande rendront votre repas inoubliable.
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Accueil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav" >
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#card">Carte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#menu">Menus</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#footer">Horaires</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="connexion">Connexion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="inscription">Inscription</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php echo $content; ?>

<footer id="footer">
    <div class="container allo">
        <ul>
            <li>Numéro de téléphone : 0643064969</li>
            <li>Adresse email : seibeledouard@yahoo.fr</li>
        </ul>

        <div>
            <h4>Horaires</h4>
            <ul class="horaires">
            <?php require_once 'models/viewSchedule.php';
            displaySchedule(); ?>

        </div>
    </div>
</footer>
<script src="view/script.js"></script>



  </body>
</html>