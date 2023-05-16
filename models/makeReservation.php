<?php
setlocale(LC_TIME, 'fr_FR.utf8');

require 'models/viewSchedule.php';

// Création d'un objet DateTime pour le 14 mai 2023
$dayDisplay = new DateTime($_POST['dateSchedule']);

$jourSemaine = date("l", $dayDisplay->getTimestamp());
$numeroMois = $dayDisplay->format('m');

switch ($jourSemaine) {
    case "Monday":
    $jourSemaine = "Lundi";
    break;
    case "Tuesday":
        $jourSemaine = "Mardi";
        break;
        case "Wednesday":
            $jourSemaine = "Mercredi";
            break;
            case "Tuesday":
                $jourSemaine = "Jeudi";
                break;
                case "Friday":
                    $jourSemaine = "Vendredi";
                    break;
                    case "Saturday":
                        $jourSemaine = "Samedi";
                        break;
                        case "Dimanche":
                            $jourSemaine = "Dimanche";
                            break;
}

// Affichage du jour de la semaine en français
echo 'Vous avez pris une réservation pour le <span id="reservationday">' . $jourSemaine . '</span> ' . $numeroMois . '.'; 
function makeReservation ($day) {

    $pdo = new PDO('mysql:dbname=quaiAntiquebdd;host=localhost', 'root', '');
    $statement = $pdo->prepare("SELECT * FROM horaires WHERE titre = :jourSemaine");
    $statement->bindValue(':jourSemaine', $day, PDO::PARAM_STR);
    $statement->execute();

    while ($scheduleReservation = $statement->fetch(PDO::FETCH_ASSOC)) {
        $startOne = strtotime($scheduleReservation['ouvertureUn']);
        $closeOne = strtotime($scheduleReservation['fermetureUn']);
        $startTwo = strtotime($scheduleReservation['ouvertureDeux']);
        $closeTwo = strtotime($scheduleReservation['fermetureDeux']);

        if ($scheduleReservation['ouvertureUn'] !== NULL && $scheduleReservation['ouvertureDeux'] !== NULL) {


            echo '<h6>Pour le service du midi :</h6><form method="POST" action="reservationValidation"><fieldset>  <label for ="timeSchedule">Heure :</label>
            <select id="timeSchedule" name="timeSchedule" required><option value="">Choisissez une option</option>';

// Boucle toutes les quinze minutes entre l'heure de début et de fin (moins une heure)
for ($time = $startOne; $time <= $closeOne - 3600; $time += 900) {
  $formattedTime = date('H:i', $time);
  // options pour chaque quinze minutes
  echo '<option value= ' . $formattedTime . '>' . $formattedTime . '</option>';
}

echo '</select></fieldset></form>';

echo '<h6>Pour le service du soir :</h6><form method="POST" action="reservationValidation"><fieldset>  <label for ="timeSchedule">Heure :</label>
            <select id="timeSchedule" name="timeSchedule" required><option value="">Choisissez une option</option>';

// Boucle toutes les quinze minutes entre l'heure de début et de fin (moins une heure)
for ($time = $startTwo; $time <= $closeTwo - 3600; $time += 900) {
  $formattedTime = date('H:i', $time);
  // options pour chaque quinze minutes
  echo '<option value= ' . $formattedTime . '>' . $formattedTime . '</option>';
}

echo '</select></fieldset></form>';




        } elseif ($scheduleReservation['ouvertureDeux'] === NULL) {

echo '<h6>Pour le service du jour :</h6><form method="POST" action="reservationValidation"><fieldset>  <label for ="timeSchedule">Heure :</label>
            <select id="timeSchedule" name="timeSchedule" required><option value="">Choisissez une option</option>';

// Boucle toutes les quinze minutes entre l'heure de début et de fin (moins une heure)
for ($time = $startOne; $time <= $closeOne - 3600; $time += 900) {
  $formattedTime = date('H:i', $time);
  // options pour chaque quinze minutes
  echo '<option value= ' . $formattedTime . '>' . $formattedTime . '</option>';
}

echo '</select></fieldset></form>';
        } else {

            header('echecReservation:/');

        }
    }
    }
/*

if (isset($_POST['envoiReservationComplete'])) {

            if (isset($_POST['allergie'])) {

                 $allergies = $_POST['allergie'];
                $allergie = implode(', ', $allergies);
                $allergiesInscription = "ola";
                $allergiesInscription = $allergie; }
                else {
                    $allergiesInscription = NULL;
                }



                $emailInscription = htmlspecialchars($_POST['email']);
                $passwordInscription = $_POST['password'];
                $civilityInscription = htmlspecialchars($_POST['civility']);
                $nameInscription = htmlspecialchars($_POST['name']);
                $telNumberInscription = $_POST['telNumber'];
                $guestNumberInscription = empty($_POST['guestNumber']) ? 1 : $_POST['guestNumber'];

                $inscriptionCustomer = $pdo->prepare('INSERT INTO customers (email, password, civility, name, telNumber, guestNumber, allergies) VALUES (:mail, :password, :civility, :name, :telNumber, :guestNumber, :allergies)');
                $inscriptionCustomer->bindValue(':mail', $emailInscription, PDO::PARAM_STR );
                $inscriptionCustomer->bindValue(':password', $passwordInscription, PDO::PARAM_STR );
                $inscriptionCustomer->bindValue(':civility', $civilityInscription, PDO::PARAM_STR );
                $inscriptionCustomer->bindValue(':name', $nameInscription, PDO::PARAM_STR );
                $inscriptionCustomer->bindValue(':telNumber', $telNumberInscription, PDO::PARAM_INT );
                $inscriptionCustomer->bindValue(':guestNumber', $guestNumberInscription, PDO::PARAM_INT);
                $inscriptionCustomer->bindValue(':allergies', $allergiesInscription, ($allergiesInscription !== NULL) ? PDO::PARAM_STR : PDO::PARAM_NULL );
                $inscriptionCustomer->execute ();
                        }
            } */