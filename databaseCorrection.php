<?php
try {
    // Exemple avec une base de données MySQL avec les identifiants par défaut
    $pdo = new PDO('mysql:dbname=quaiAntiquedbb;host=localhost', 'root', '');
    if ($pdo->exec('DROP DATABASE quaiAntiquedbb') !== false) {
        echo 'Base de données détruite';
    } else {
        echo 'Une erreur est survenue';
    }
} catch (PDOException $e) {
    //Gestion de l'erreur de connexion
}