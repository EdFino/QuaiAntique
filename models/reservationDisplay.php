<?php

function displayReservationOffice () {

    $pdo = new PDO('mysql:dbname=quaiAntiquebdd;host=localhost', 'root', '');

    $dateNow = date('Y-m-d');
    $statement = $pdo->prepare('SELECT SUM(guestNumber) FROM reservations WHERE dateReservation = :date');
    $statement->bindValue (':date', $dateNow, PDO::PARAM_STR);
    if ($statement->execute()) {
        while ($remainingPlaces = $statement->fetch(PDO::FETCH_NUM)) {
            echo '<h4>Il reste encore <strong>' . (50 - $remainingPlaces[0]) . '</strong> places.</h4>';
        }
    }
    $statement = $pdo->prepare('SELECT * FROM reservations WHERE dateReservation = :date');
    $statement->bindValue (':date', $dateNow, PDO::PARAM_STR);

    if ($statement->execute()) {
        while ($scheduleReservation = $statement->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="alert alert-info" role="alert">Réservation pour ' . $scheduleReservation['guestNumber'] . ' aujourd\'hui à ' . $scheduleReservation['scheduleReservation'] . '</br>
                ' . $scheduleReservation['civility'] . ' ' . $scheduleReservation['name'] . ' : ' . $scheduleReservation['telNumber'] . ', ' . $scheduleReservation['email'] . '</br>';
                if ($scheduleReservation['allergies']) {
                    echo 'Allergies : ' . $scheduleReservation['allergies'];
                } else { } echo '</div>';
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