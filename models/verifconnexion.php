<?php
function verifConnexion () {

    $pdo = new PDO("mysql:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_NAME']}", $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);

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
                    while ($customerSession = $recupCustomer->fetch(PDO::FETCH_ASSOC)) {
                $_SESSION['role'] = "customer";
                $_SESSION['name'] = $customerSession['name'];
                $_SESSION['civility'] = $customerSession ['civility'];
                header('location:/');
                    }
            } else {
                echo 'Votre mot de passe ou votre identifiant est incomplet, veuillez réessayer.';
            }
        }
    }
}
}