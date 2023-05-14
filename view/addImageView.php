<?php

session_start();
if (!isset($_SESSION['role']) && $_SESSION['role'] !== 'admin') {
    header('location:/');
} else {

require_once 'models/addImage.php';
addImage();
?>

<div class="alert alert-success" role="alert">
La photo a bien été intégrée dans la galerie.</div>
<a href='/'>Voir la page principale du site</a>
<a href='office'>Retourner au panneau d'administration</a>

<?php 
$content = ob_get_clean();
require 'view/layout.php';
}

?>