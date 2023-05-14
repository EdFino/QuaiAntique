<?php
function displayCard ($service) {
    try {
    $pdo = new PDO('mysql:dbname=quaiAntiquebdd;host=localhost', 'root', '');
    $statement = $pdo->prepare ("SELECT nameDish, priceDish, descriptionDish FROM dishes WHERE service = ?");
    $statement ->bindParam (1, $service, PDO::PARAM_STR);
    if ($statement ->execute ()) {
        echo '<h3> ' . $service . '</h3>';
        while ($dish = $statement->fetch(PDO::FETCH_ASSOC)) {
            echo '<strong> ' . $dish['nameDish'] . '</strong> : ' . $dish['priceDish'] . '€</br>
            '. $dish['descriptionDish'] . '</br></br>';
        }
    } else {
        echo 'Erreur bitch !';
    }
} catch (exception $e) {
    echo 'erreur totale!';
}
}