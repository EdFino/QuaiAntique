<?php
session_start();
ob_start();

require 'models/makeReservation.php';

makeReservation($jourSemaine, $numeroMois);

?>


<?php 
  $content = ob_get_clean ();

require 'view/layout.php';