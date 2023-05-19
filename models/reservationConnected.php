<?php

function recupData () {

if (isset($_SESSION['role']) && $_SESSION['role'] === 'customer') {
    $pdo = new PDO('mysql:dbname=quaiAntiquebdd;host=localhost', 'root', '');

    $statement = $pdo->prepare("SELECT * FROM customers WHERE name = :name");
    $statement->bindValue(':name', $_SESSION['name'], PDO::PARAM_STR);

        if ($statement->execute()) {
            $dataCustomer = $statement->fetch(PDO::FETCH_ASSOC);
            return $dataCustomer;
       }
    }

    }