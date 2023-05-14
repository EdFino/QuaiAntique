<?php
session_start();
require_once 'models/inscriptionModel.php';
ob_start();
inscriptionForm();

?>

<div class="alert alert-success" role="alert">
Votre inscription est finalisée.
Merci beaucoup de nous avois rejoints.
 Vous pouvez maintenant vous connecter !
</div>

<?php 
$content = ob_get_clean();
require 'view/layout.php';