<?php

function deleteSchedule () {


    $pdo = new PDO('mysql:dbname=quaiAntiquebdd;host=localhost', 'root', '');

    /*if (verificationInscription) {}*/
    if (isset($_POST['delete'])) {

            $titleSchedule = $_POST['deleteSelect'];

            $deleteSchedule = $pdo->prepare ('DELETE FROM horaires WHERE titre = :titre');
            $deleteSchedule->bindValue(':titre', $titleSchedule, PDO::PARAM_STR);
            $deleteSchedule->execute();


    }
}

        ?>