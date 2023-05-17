<?php
session_start();
ob_start();
require 'models/deconnexion.php';
deconnect (); ?>

<p> Vous avez été bien déconnecté !</p>

<a href='/'>Retour à la page d'accueil</a>

<?php 

$content = ob_get_clean();

require 'view/layout.php';

?>