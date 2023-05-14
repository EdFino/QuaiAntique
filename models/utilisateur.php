<?php

class Utilisateur {

    private $name;
  
    public function __construct($name) {
      $this->name = $name;
    }
  
 
    public function getName() {
      return $this->name;
    }
  
    public function enregistrer() {
      // Connexion à la base de données
      $pdo = new PDO('mysql:host=localhost;dbname=quaiAntiquebdd', 'root', '');
  
      // Préparation de la requête SQL
      $requete = $pdo->prepare('INSERT INTO test (name) VALUES (?)');
  
      // Exécution de la requête avec les valeurs des paramètres
      $requete->execute(array($this->name));
  
      // Récupération du résultat de la requête
      $utilisateur = $requete->fetch();
  
      if (!$utilisateur) {
        return null;
      }
  
      return new Utilisateur($utilisateur['name']);
    }
  
  }
