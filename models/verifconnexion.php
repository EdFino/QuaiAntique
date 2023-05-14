<?php
function verifConnexion () {

    $pdo = new PDO('mysql:dbname=quaiAntiquebdd;host=localhost', 'root', '');

    if (isset($_POST['envoi'])) {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $emailCustomer = htmlspecialchars($_POST['email']);
            $passwordCustomer = $_POST['password'];

            $recupCustomer = $pdo->prepare('SELECT * FROM admins WHERE email = ? AND password = ? ');
            $recupCustomer->execute (array ($emailCustomer, $passwordCustomer));

            if ($recupCustomer->rowCount() > 0) {
                $_SESSION['role'] = "admin";
                header ('location:office');
            } else {
                $recupCustomer = $pdo->prepare('SELECT * FROM customers WHERE email = ? AND password = ? ');
                $recupCustomer->execute (array ($emailCustomer, $passwordCustomer));
    
                if ($recupCustomer->rowCount() > 0) {
                $_SESSION['role'] = "customer";
                $_SESSION['name'] = $recupCustomer->fetch()['name'];
                /*$_SESSION['civility'] = $recupCustomer->fetch()['civility'];*/
                header('location:/');
            } else {
                echo 'Votre mot de passe ou votre identifiant est incomplet, veuillez réessayer.';
            }
        }
    }
}
}