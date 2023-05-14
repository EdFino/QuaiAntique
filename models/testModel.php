<?php

function testplease () {

    $pdo = new PDO('mysql:dbname=quaiAntiquebdd;host=localhost', 'root', '');

    if(isset($_POST['ok'])) {
        $bgname = $_POST['name'];
    

        $bitch = $pdo->prepare("INSERT INTO test (name) VALUES (:name)");
        $bitch->bindValue(':name', $bgname, PDO::PARAM_STR);
        $bitch->execute();
    }
}