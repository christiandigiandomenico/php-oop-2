<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require './Models/Food.php';
require './Models/Game.php';
require './Models/Product.php';

$croccantini = new Food("Croccantini Plus", "19.99", "Cibo", "./img/crocchetta.webp", "Cane", "10kg");
$cibo = new Food("Cibo per cani", "7.99", "Cibo", "./img/cibocani.jpg", "Gatto", "2kg");

$pallina = new Game("Palla da gioco", "5.99", "Giocattolo", "./img/palla.jpg", "Gatto");
$osso = new Game("Osso Masticabile", "6.50", "Giocattolo", "./img/osso.jpg", "Cane");

$cuccia = new Product("Cuccia per cane", "90.00", "Prodotto", "./img/cucciacane.jpg", "Cane");
$cuccia2 = new Product("Cuccia per gatto", "24.00", "Prodotto", "./img/cucciagatto.jpg", "Gatto");


$foods = [
    $croccantini,
    $cibo
];

$games = [
    $pallina,
    $osso
];

$houses = [
    $cuccia,
    $cuccia2
]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping</title>
    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/1ad8417259.js" crossorigin="anonymous"></script>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>


    <?php

    foreach ($foods as $food) {
        //var_dump($product);
        //echo $product->getPeso();
        echo '<div class="card" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title">' . $product->nome . '</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">' . $product->prezzo . '</h6>
    <h6 class="card-subtitle mb-2 text-body-secondary">' . $product->genere . '</h6>
    <h6 class="card-subtitle mb-2 text-body-secondary">' . $product->categoria . '</h6>
</div>
</div>';
    }

    ?>

    <hr>

    <?php

    foreach ($games as $game) {
        //var_dump($product);
        //echo $product->getPeso();
        echo '<div class="card" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title">' . $game->nome . '</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">' . $game->prezzo . '</h6>
    <h6 class="card-subtitle mb-2 text-body-secondary">' . $game->genere . '</h6>
    <h6 class="card-subtitle mb-2 text-body-secondary">' . $game->categoria . '</h6>
</div>
</div>';
    }

    ?>

    <hr>

    <?php

    foreach ($house as $house) {
        //var_dump($product);
        //echo $product->getPeso();
        echo '<div class="card" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title">' . $house->nome . '</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">' . $house->prezzo . '</h6>
    <h6 class="card-subtitle mb-2 text-body-secondary">' . $house->genere . '</h6>
    <h6 class="card-subtitle mb-2 text-body-secondary">' . $house->categoria . '</h6>
</div>
</div>';
    }

    ?>


    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>