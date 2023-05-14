<?php 
session_start();
ob_start();

if (isset($_SESSION['role'])) {
  echo 'Vous êtes bien connectés.'; } else {

verifConnexion (); ?>

<div class='container'>
<form method="POST">
  <label for="email">Email :</label>
  <input type="email" id="email" name="email"><br>

  <label for="password">Mot de passe :</label>
  <input type="password" id="password" name="password"><br>

  <input type="submit" value="Envoyer" name="envoi">

  <p>Souhaitez-vous vous <a href='inscription'>inscrire ?</a></p>

<?php

  }

$content = ob_get_clean ();

require 'view/layout.php';
?>