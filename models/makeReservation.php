<?php

setlocale(LC_TIME, 'fr_FR.utf8');

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
                        case "Sunday":
                            $jourSemaine = "Dimanche";
                            break;
                        }

function makeReservation ($day, $monthDay) {

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

$pdo = new PDO('mysql:dbname=quaiAntiquebdd;host=localhost', 'root', '');

$dateNow = date('Y-m-d');

$statement = $pdo->prepare ("SELECT SUM(guestNumber) FROM reservations WHERE dateReservation = :date");
$statement->bindValue(':date', $dateNow, PDO::PARAM_STR);

if ($statement->execute()) {
    while ($places = $statement->fetch(PDO::FETCH_NUM)) {
    if (($places[0] + $_POST['guestNumber'])  > 50) {
        echo "Désolé, vous ne pouvez pas effectuer de réservations pour ce jour-ci, il n'y a plus de place disponible.";
    } else {

// Affichage du jour de la semaine en français
echo '<h6>Vous avez pris une réservation pour le <span id="reservationday">' . $day . '</span> ' . $monthDay . '.</h6>'; 

    $pdo = new PDO('mysql:dbname=quaiAntiquebdd;host=localhost', 'root', '');
    $statementTwo = $pdo->prepare("SELECT * FROM horaires WHERE titre = :jourSemaine");
    $statementTwo->bindValue(':jourSemaine', $day, PDO::PARAM_STR);
    $statementTwo->execute();

    while ($scheduleReservation = $statementTwo->fetch(PDO::FETCH_ASSOC)) {
        $startOne = strtotime($scheduleReservation['ouvertureUn']);
        $closeOne = strtotime($scheduleReservation['fermetureUn']);
        $startTwo = strtotime($scheduleReservation['ouvertureDeux']);
        $closeTwo = strtotime($scheduleReservation['fermetureDeux']);

        if ($scheduleReservation['ouvertureUn'] !== NULL && $scheduleReservation['ouvertureDeux'] !== NULL) {


            echo '<div class="formContainer"><form method="POST" action="reservationValidation"><fieldset>
            <select id="timeSchedule" name="timeSchedule" required><option value="">Choisissez votre heure</option>';

// Boucle toutes les quinze minutes entre l'heure de début et de fin (moins une heure)
echo '<optgroup label="Service du midi">';
for ($time = $startOne; $time <= $closeOne - 3600; $time += 900) {
  $formattedTime = date('H:i', $time);
  // options pour chaque quinze minutes
  echo '<option value= ' . $formattedTime . '>' . $formattedTime . '</option>';
}
echo '<optgroup label="Service du soir">';
// Boucle toutes les quinze minutes entre l'heure de début et de fin (moins une heure)
for ($time = $startTwo; $time <= $closeTwo - 3600; $time += 900) {
  $formattedTime = date('H:i', $time);
  // options pour chaque quinze minutes
  echo '<option value= ' . $formattedTime . '>' . $formattedTime . '</option>';
}



        } elseif ($scheduleReservation['ouvertureDeux'] === NULL) {

            echo '<div class="formContainer"><form method="POST" action="reservationValidation"><fieldset>
            <select id="timeSchedule" name="timeSchedule" required><option value="">Choisissez votre heure</option>';

// Boucle toutes les quinze minutes entre l'heure de début et de fin (moins une heure)
for ($time = $startOne; $time <= $closeOne - 3600; $time += 900) {
  $formattedTime = date('H:i', $time);
  // options pour chaque quinze minutes
  echo '<option value= ' . $formattedTime . '>' . $formattedTime . '</option>';
}

        } else {

            header('echecReservation:/');

        } echo ' </select><br/><input type="submit" value="Envoyer" name="envoiReservation"></fieldset></form></div>';

    }
    }
}
}
}