<?php
try {
    $pdo = new PDO('mysql:host=localhost', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if ($pdo->exec('CREATE DATABASE quaiAntiquebdd') !== false) {
            $antique = new PDO('mysql:dbname=quaiAntiquebdd;host=localhost', 'root', '');
            
            if ($antique->exec('CREATE TABLE Customers (
                idCustomer INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
                email VARCHAR (100) NOT NULL,
                password VARCHAR (50) NOT NULL,
                civility VARCHAR (10) NOT NULL,
                name VARCHAR (50) NOT NULL,
                telNumber INT (10) NOT NULL,
                guestNumber INT,
                allergies VARCHAR (100)
                )') !== false) {

                if ($antique->exec('CREATE TABLE Reservations (
                    idReservation INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
                    civility VARCHAR (10) NOT NULL,
                    name VARCHAR (50) NOT NULL,
                    email VARCHAR (100) NOT NULL,
                    telNumber INT (10) NOT NULL,
                    guestNumber INT,
                    allergies VARCHAR (100),
                    dateReservation  DATE,
                    scheduleReservation DATETIME
                    )') !== false) {

                    if ($antique->exec('CREATE TABLE Admins (
                        idAdmin INT (11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
                        email VARCHAR (100) NOT NULL,
                        password VARCHAR (30) NOT NULL
                    )') !== false) {

                        if ($antique->exec('CREATE TABLE Dishes (
                            idDish INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
                            nameDish VARCHAR (30) NOT NULL,
                            priceDish  INT NOT NULL,
                            descriptionDish VARCHAR(500) NOT NULL,
                            service VARCHAR (50) NOT NULL
                        )') !== false) {

                            if ($antique->exec('CREATE TABLE Menus (
                                idMenu INT(11) PRIMARY KEY AUTO_INCREMENT,
                                nameMenu VARCHAR(30) NOT NULL,
                                priceMenu  INT NOT NULL,
                                entrée VARCHAR(50),
                                plat VARCHAR (50),
                                dessert VARCHAR (50)
                            )') !== false) {

                                if ($antique->exec('CREATE TABLE Images (
                                    idImages INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
                                    name VARCHAR (50) NOT NULL,
                                    file VARCHAR(50) NOT NULL,
                                    descriptionImage VARCHAR (150) NOT NULL
                                    )') !== false) {

                                    if ($antique->exec('CREATE TABLE Allergies (
                                        idAllergy INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
                                        allergy VARCHAR (50) NOT NULL
                                    )') !== false) {

                                        if ($antique->exec('CREATE TABLE horaires (
                                                idHoraire INT(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
                                                titre VARCHAR (50) NOT NULL,
                                                ouvertureUn TIME,
                                                fermetureUn TIME,
                                                ouvertureDeux TIME,
                                                fermetureDeux TIME)') !==false) {
                                        }

                                        if ($antique->exec('CREATE TABLE AllergiesClient (
                                            idC INT (11) NOT NULL,
                                            idA INT (11) NOT NULL,
                                            PRIMARY KEY (idC, idA),
                                            FOREIGN KEY (idC) REFERENCES Customers (idCustomer),
                                            FOREIGN KEY (idA) REFERENCES Allergies (idAllergy)
                                            )') !== false) {

                    echo 'Installation terminée d\'AllergiesClient !';
                } else {
                    echo 'Impossible de créer la table AllergiesClient<br>';
                }
            } else {
            echo 'Impossible de créer la table Allergies<br>';
        }
    } else {
    echo 'Impossible de créer la table Images<br>';
                }
                } else {
                echo 'Impossible de créer la table Menus<br>';
                }
            } else {
                echo 'Impossible de créer la table Dishes<br>';
            }
            } else {
                echo 'Impossible de créer la table Admins<br>';
            }
            } else {
                echo 'Impossible de créer la table Customers<br>';
            }
            } else {
                echo 'Impossible de créer la table Reservations<br>';
            }
        } else {
            echo 'Impossible de créer la base<br>';
        }
    } catch (PDOException $exception){
    die($exception->getMessage());
}