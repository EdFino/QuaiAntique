<?php
session_start();
ob_start();

require 'models/makeReservation.php';

makeReservation($jourSemaine);

var_dump($_POST);

if (isset($_POST['allergie'])) {

    $allergies = $_POST['allergie'];
    $allergie = implode(', ', $allergies);
    $allergiesReservation = "ola";
    $allergiesReservation = $allergie; }
    else {
        $allergiesReservation = NULL;
    }



$_SESSION['civility'] = $_POST['civility'];
$_SESSION['username'] = $_POST['username'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['telNumber'] = $_POST['telNumber'];
$_SESSION['guestNumber'] = $_POST['guestNumber'];
$_SESSION['allergie'] = $allergiesReservation;
$_SESSION['dateSchedule'] = $_POST['dateSchedule'];

var_dump($_SESSION);

?>


<?php 
  $content = ob_get_clean ();

require 'view/layout.php';