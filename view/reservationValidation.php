<?php

session_start();


require_once 'models/finalizeReservation.php';
finalizeReservation();
?>

<div class="alert alert-success" role="alert">
L'horaire a bien été supprimé.
</div>
<a href='/'>Voir la page principale du site</a>
<a href='office'>Retourner au panneau d'administration</a>

<?php 
$content = ob_get_clean();
require 'view/layout.php';

?>