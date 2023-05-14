<?php

session_start();
if (!isset($_SESSION['role']) && $_SESSION['role'] !== 'admin') {
    header('location:/');
} else {

require_once 'models/modifySchedule.php';
modifySchedule();
?>

<div class="alert alert-success" role="alert">
L'horaire a bien été modifié.
</div>
<a href='/'>Voir la page principale du site</a>
<a href='office'>Retourner au panneau d'administration</a>

<?php 
$content = ob_get_clean();
require 'view/layout.php';
}

?>