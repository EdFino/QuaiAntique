<?php

require_once 'controllers/homepage.php';
require_once 'controllers/formCont.php';
require_once 'controllers/ContBackoffice.php';
require_once 'controllers/inscriptionController.php';
require_once 'controllers/deconnexionController.php';
require_once 'controllers/testpourriCont.php';

 $route = $_SERVER['REQUEST_URI'];

switch ($route) {
  case '/connexion':
    form();
    break;
    case '/reservation':
    require_once 'view/reservationView.php';
      break;
  case '/inscription':
    require_once 'view/inscriptionView.php';
    break;
  case '/office':
    office();
    break;
  case '/deconnexion':
    deconnexion();
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
  default:
    homepage();
    break;
}