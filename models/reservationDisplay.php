<?php

function displayReservationOffice () {

    $pdo = new PDO('mysql:dbname=quaiAntiquebdd;host=localhost', 'root', '');

    $dateNow = date('Y-m-d');

    $statement = $pdo->prepare('SELECT * FROM reservations WHERE dateReservation = :date');
    $statement->bindValue (':date', $dateNow, PDO::PARAM_STR);

    if ($statement->execute()) {

        while ($scheduleReservation = $statement->fetch(PDO::FETCH_ASSOC)) {
            echo 'Réservation pour ' . $scheduleReservation['guestNumber'] . ' aujourd\'hui à ' . $scheduleReservation['scheduleReservation'] . '</br>
                ' . $scheduleReservation['civility'] . ' ' . $scheduleReservation['name'] . ' : ' . $scheduleReservation['telNumber'] . ', ' . $scheduleReservation['email'] . '</br>';
                if ($scheduleReservation['allergies']) {
                    echo 'Allergies : ' . $scheduleReservation['allergies'];
                }
        }
    }
        }

function displayReservationCustomer () {
    if (isset($_SESSION['role'])) { 

        $pdo = new PDO('mysql:dbname=quaiAntiquebdd;host=localhost', 'root', '');

    $statement = $pdo->prepare('SELECT * FROM reservations WHERE name = :name');

    $statement->bindValue (':name', $_SESSION['name'], PDO::PARAM_STR);

    if ($statement->execute()) {

        while ($reservation = $statement->fetch(PDO::FETCH_ASSOC)) {
            echo $reservation['civility'] . ' ' . $reservation['name'] . ', votre réservation vous attend au Quai Antique pour le ' . $reservation['dateReservation'] . ' à ' . $reservation['scheduleReservation'];
        }
        } else {
    }
}
}


/*function displaySchedule () {
    try {
    $pdo = new PDO('mysql:dbname=quaiAntiquebdd;host=localhost', 'root', '');
    $statement = $pdo->prepare ("SELECT * FROM horaires");
        if ($statement ->execute ()) {

        while ($schedule = $statement->fetch(PDO::FETCH_ASSOC)) {


            echo '<li><h6><span class="titleSchedule">' . $schedule['titre'] . '</h6>';
            if ( $schedule['ouvertureUn'] !== NULL
                && $schedule['fermetureUn'] !== NULL
                && $schedule['ouvertureDeux'] !== NULL
                && $schedule['fermetureDeux'] !== NULL) {
                    echo timeSchedule($schedule['ouvertureUn']) . ' - ' . timeSchedule($schedule['fermetureUn']) . '</br>' .
                    timeSchedule($schedule['ouvertureDeux']) . ' - ' . timeSchedule($schedule['fermetureDeux']) . '</li>';

                } elseif ( $schedule['ouvertureUn'] !== NULL
                        && $schedule['fermetureUn'] !== NULL
                        && $schedule['ouvertureDeux'] === NULL
                        && $schedule['fermetureDeux'] === NULL) {
                            echo timeSchedule($schedule['ouvertureUn']) . ' - ' . timeSchedule($schedule['fermetureUn']) . '</li>';
                            
                        } else {
                            echo "FERME</li>";
                        }
        }
    } else {
        echo 'Erreur bitch !';
    }
} catch (exception $e) {
    echo 'erreur totale!';
}
}

function displayScheduleReservation () {
    try {
    $pdo = new PDO('mysql:dbname=quaiAntiquebdd;host=localhost', 'root', '');
    $statement = $pdo->prepare ("SELECT * FROM horaires");
        if ($statement ->execute ()) {

        while ($schedule = $statement->fetch(PDO::FETCH_ASSOC)) {


            echo '<li><h6><span class="reservationSchedule">' . $schedule['titre'] . '</h6>';
            if ( $schedule['ouvertureUn'] !== NULL
                && $schedule['fermetureUn'] !== NULL
                && $schedule['ouvertureDeux'] !== NULL
                && $schedule['fermetureDeux'] !== NULL) {
                    echo timeSchedule($schedule['ouvertureUn']) . ' - ' . timeSchedule($schedule['fermetureUn']) . '</br>' .
                    timeSchedule($schedule['ouvertureDeux']) . ' - ' . timeSchedule($schedule['fermetureDeux']) . '</li>';

                } elseif ( $schedule['ouvertureUn'] !== NULL
                        && $schedule['fermetureUn'] !== NULL
                        && $schedule['ouvertureDeux'] === NULL
                        && $schedule['fermetureDeux'] === NULL) {
                            echo timeSchedule($schedule['ouvertureUn']) . ' - ' . timeSchedule($schedule['fermetureUn']) . '</li>';
                            
                        } else {
                            echo "FERME</li>";
                        }
        }
    } else {
        echo 'Erreur bitch !';
    }
} catch (exception $e) {
    echo 'erreur totale!';
}
} */