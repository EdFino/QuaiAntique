<?php

function recupData () {

    $pdo = new PDO('mysql:dbname=quaiAntiquebdd;host=localhost', 'root', '');

    $statement = $pdo->prepare("SELECT * FROM customers WHERE name = :name");
    $statement->bindValue(':name', $_SESSION['name'], PDO::PARAM_STR);

        if ($statement->execute()) {
            $dataCustomer = $statement->fetch(PDO::FETCH_ASSOC);
            return $dataCustomer;
       }
    }

    $recupData = recupData();
if ($recupData['allergies'] !== NULL) {
$recupData['allergie'] = explode (", ", $recupData['allergies']);
}