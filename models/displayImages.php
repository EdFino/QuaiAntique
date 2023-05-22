<?php

function displayImages () {

  $pathImages = 'view/images/';

  $images = glob($pathImages . '*');
  foreach ($images as $image) {
    if (is_file($image) && in_array(pathinfo($image, PATHINFO_EXTENSION), array('jpg', 'jpeg', 'png', 'gif'))) {
      echo '	<div class="imagePublic">
			<img src="' . $image . '" alt="' . basename($image) . '" />
		  </div>';
    }
  }
}

function DisplayImagesOffice () {

  // Chemin vers le dossier contenant les images
  $pathImages = 'view/images/';
  $i = 1;

  // Liste tous les fichiers dans le dossier
  $images = glob($pathImages . '*');
  echo '  <div class="displayImagesOffice">';
  // Boucle sur les fichiers
  foreach ($images as $image) {
    // Vérifie si le fichier est une image
    if (is_file($image) && in_array(pathinfo($image, PATHINFO_EXTENSION), array('jpg', 'jpeg', 'png', 'gif'))) {
      // Affiche l'image avec une balise img
      $infoImage = pathinfo($image);
      echo '	<div class="itemOffice">
			<img src="' . $image . '" alt="' . basename($image) . '" /></br>

      <form id="deleteImage" action="deleteImage" method="POST">
      <fieldset>
        <button class="littleButton" name="name" value=""' . $infoImage['basename'] . '">Supprimer l\'image</button></br>
          </fieldset>
        </form>

		  </div>';
      $i++;
    }
  }
  echo '</div>';
}
?>