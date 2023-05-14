<?php /*

class InscriptionController {
    public function formulaire() {
      $vue = new Vue('inscription');
      $vue->generer(array());
    }
  
    public function inscription() {
      $nom = $_POST['nom'];
      $email = $_POST['email'];
      $motdepasse = $_POST['motdepasse'];
  
      // Valider les données du formulaire
      if (empty($nom) || empty($email) || empty($motdepasse)) {
        // Si des données sont manquantes, afficher une erreur
        $vue = new Vue('inscription');
        $vue->generer(array('erreur' => 'Tous les champs sont obligatoires'));
      } else {
        // Enregistrer l'utilisateur dans la base de données
        $utilisateur = new Utilisateur($nom, $email, $motdepasse);
        $utilisateur->enregistrer();
  
        // Afficher une confirmation de l'inscription
        $vue = new Vue('confirmation');
        $vue->generer(array('nom' => $nom));
      }
    }
  }
  
*/

?>