<?php
session_start();
ob_start();

if (isset($_SESSION['role'])) {
  echo 'Vous êtes bien connectés.'; } else {
?>

<form method="POST" action="validationView">
  <label for="email">Email :</label>
  <input type="email" id="email" name="email"><br>

  <label for="password">Mot de passe :</label>
  <input type="password" id="password" name="password"><br>

  <label for ="civility">Civilité :</label>
  <select id="civility" name="civility">
    <option value="">Choisissez </option>
    <option value="M.">M.</option>
    <option value="Mme">Mme</option>
    <option value ="Mx">Mx</option>
</select> <br/>

  <label for="name">Nom :</label>
  <input type="text" id="name" name="name"><br>

  <label for="telNumber">Numéro de téléphone :</label>
  <input type="number" id="telNumber" name="telNumber"><br>

  <label for="guestNumber">Numéro d'invités :</label>
  <input type="number" id="guestNumber" name="guestNumber" min="1" max="9"><br>

<div class="checkbox">
  <div>
  <input type="checkbox" id="Céleri" name="allergie[]" value="Céleri">
  <label for="Céleri">Céleri</label>
</div>
<div>
  <input type="checkbox" id="Céréales" name="allergie[]" value="Céréales">
  <label for="Céréales">Céréales</label>
</div>
<div>
  <input type="checkbox" id="Crustacé" name="allergie[]" value="Crustacé">
  <label for="Crustacé">Crustacé</label>
</div>
<div>
  <input type="checkbox" id="Oeuf" name="allergie[]" value="Oeuf">
  <label for="Oeuf">Oeuf</label>
</div>
<div>
  <input type="checkbox" id="Poisson " name="allergie[]" value="Poisson">
  <label for="Poisson">Poisson</label>
</div>
<div>
  <input type="checkbox" id="Lupin " name="allergie[]" value="Lupin">
  <label for="Lupin">Lupin</label>
</div>
<div>
  <input type="checkbox" id="Arachide" name="allergie[]" value="Arachide">
  <label for="Arachide">Arachide</label>
</div>
<div>
  <input type="checkbox" id="Soja" name="allergie[]" value="Soja">
  <label for="Soja">Soja</label>
</div>
<div>
  <input type="checkbox" id="Lait" name="allergie[]" value="Lait">
  <label for="Lait">Lait</label>
</div>
<div>
  <input type="checkbox" id="Mollusque" name="allergie[]" value="Mollusque">
  <label for="Mollusque">Mollusque</label>
</div>
<div>
  <input type="checkbox" id="Moutarde" name="allergie[]" value="Moutarde">
  <label for="Moutarde">Moutarde</label>
</div>
<div>
  <input type="checkbox" id="Fruits à coque" name="allergie[]" value="Fruits à coque">
  <label for="Fruits à coque">Fruits à coque</label>
</div>
<div>
  <input type="checkbox" id="Graines de sésame" name="allergie[]" value="Graines de sésame">
  <label for="Graines de sésame">Graines de sésame</label>
</div>
<div>
  <input type="checkbox" id="Anhydride sulfureux et sulfites" name="allergie[]" value="Anhydride sulfureux et sulfites">
  <label for="Anhydride sulfureux et sulfites">Anhydride sulfureux et sulfites</label>
</div>
</div>


  <input type="submit" value="Envoyer" name="envoiInscription">
</form>

<?php 
  }
  $content = ob_get_clean ();

require 'view/layout.php';