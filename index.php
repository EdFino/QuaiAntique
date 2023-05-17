<?php


$route = $_SERVER['REQUEST_URI'];

switch ($route) {

  case '/connexion':
  require 'models/verifconnexion.php';
  require_once 'view/formBoot.php';
  break;

  case '/reservation':
  require_once 'view/reservationView.php';
  break;

  case '/inscription':
  require_once 'view/inscriptionView.php';
  break;

  case '/office':
  require_once "view/officeBoot.php";
  break;

  case '/deconnexion':
  require 'view/deconnexionView.php';
  break;

  case '/test':
  require 'view/testView.php';
  break;

  case '/validationView':
  require 'view/validationView.php';
  break;

  case '/validationSchedule':
  require_once 'view/validationSchedule.php';
  break;

  case '/deleteSchedule':
  require_once 'view/deteleValidationSchedule.php';
  break;

  case '/modificationSchedule':
  require_once 'view/validationModifySchedule.php';
  break;

  case '/addImage':
  require_once 'view/addImageView.php';
  break;

  case '/deleteImage':
  require_once 'view/deleteImageView.php';
  break;

  case '/reservationTime':
  require_once 'view/reservationTimeView.php';
  break;

  case '/reservationValidation':
  require_once 'view/reservationValidation.php';
  break;

  default:
  require_once 'view/bootnew.php';
  break;
}