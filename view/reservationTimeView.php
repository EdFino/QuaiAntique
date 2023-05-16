<?php
session_start();
ob_start();

require 'models/makeReservation.php';

makeReservation($jourSemaine);


$_SESSION['civility'] = $_POST['civility'];
$_SESSION['username'] = $_POST['username'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['telNumber'] = $_POST['telNumber'];
$_SESSION['guestNumber'] = $_POST['guestNumber'];
$_SESSION['allergie'] = $_POST['allergie'];
$_SESSION['dateSchedule'] = $_POST['dateSchedule'];
?>


<?php 
  $content = ob_get_clean ();

require 'view/layout.php';