<?php

function displayCard ($service) {
    try {
    $pdo = new PDO('mysql:dbname=quaiAntiquebdd;host=localhost', 'root', '');
    $statement = $pdo->prepare ("SELECT nameDish, priceDish, descriptionDish FROM dishes WHERE service = ?");
    $statement ->bindParam (1, $service, PDO::PARAM_STR);
    if ($statement ->execute ()) {
        echo '<h3> ' . $service . '</h3>';
        while ($dish = $statement->fetch(PDO::FETCH_ASSOC)) {
            echo '<p><strong> ' . $dish['nameDish'] . '</strong> : ' . $dish['priceDish'] . '€</br>
            <span class="descriptionDish">'. $dish['descriptionDish'] . '</span></br></p>';
        }
    } else {
        echo 'Erreur !';
    }
} catch (exception $e) {
    echo 'erreur totale!';
}
}