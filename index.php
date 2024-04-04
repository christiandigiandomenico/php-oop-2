<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require './Models/Product.php';
require './Models/Food.php';
require './Models/Game.php';


$croccantini = new Food("Croccantini Plus", "19.99", "Cibo", "./img/crocchetta.webp", "Cane", "10kg", "Grande", "Piccola");
$cibo = new Food("Cibo per cani", "7.99", "Cibo", "./img/cibocani.webp", "Gatto", "2kg", "Grande", "Piccola");

$pallina = new Game("Palla da gioco", "5.99", "Giocattolo", "./img/palla.webp", "Gatto", "50gr");
$osso = new Game("Osso Masticabile", "6.50", "Giocattolo", "./img/osso.jpg", "Cane", "100gr");

$cuccia = new Product("Cuccia per cane", "90.00", "Prodotto", "./img/cucciacane.jpg", "Cane", "Grande", "Piccola");
$cuccia2 = new Product("Cuccia per gatto", "24.00", "Prodotto", "./img/cucciagatti.webp", "Gatto", "Grande", "Piccola");

$error = null;
try {
    $croccantini = new Food("Croccantini Plus", "19.99", "Cibo", "./img/crocchetta.webp", "Cane", "10kg", "Grande", "Piccola");
} catch (Exception $e) {

    $error = "Errore: " . $e->getMessage();
}

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
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <h1 class="text-center">Animal Shop</h1>

    <div class="container-fluid d-flex justify-content-center gap-5">

        <?php

        foreach ($foods as $food) {
            //var_dump($product);
            //echo $product->getPeso();
            echo '<div class="card" style="width: 18rem;">
<div class="card-body">
    <img src="' . $food->picture  . '">
    <h5 class="card-title">' . $food->nome . '</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">' . $food->prezzo . '</h6>
    <h6 class="card-subtitle mb-2 text-body-secondary">' . $food->genere . '</h6>
    <h6 class="card-subtitle mb-2 text-body-secondary">' . $food->categoria . '</h6>
</div>
</div>';
        }

        ?>

    </div>

    <?php

    if ($error) {
    ?>
        <div class="alert alert-warning" role="alert">
            <?= $error ?>
        </div>
    <?php
    }

    ?>

    <hr>

    <div class="container-fluid d-flex justify-content-center gap-5">

        <?php

        foreach ($games as $game) {
            //var_dump($product);
            //echo $product->getPeso();
            echo '<div class="card" style="width: 18rem;">
<div class="card-body">
    <img src="' . $game->picture  . '">
    <h5 class="card-title">' . $game->nome . '</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">' . $game->prezzo . '</h6>
    <h6 class="card-subtitle mb-2 text-body-secondary">' . $game->genere . '</h6>
    <h6 class="card-subtitle mb-2 text-body-secondary">' . $game->categoria . '</h6>
</div>
</div>';
        }

        ?>

    </div>

    <hr>

    <div class="container-fluid d-flex justify-content-center gap-5">

        <?php

        foreach ($houses as $house) {
            //var_dump($product);
            //echo $product->getPeso();
            echo '<div class="card" style="width: 18rem;">
<div class="card-body">
    <img src="' . $house->picture  . '">
    <h5 class="card-title">' . $house->nome . '</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">' . $house->prezzo . '</h6>
    <h6 class="card-subtitle mb-2 text-body-secondary">' . $house->genere . '</h6>
    <h6 class="card-subtitle mb-2 text-body-secondary">' . $house->categoria . '</h6>
</div>
</div>';
        }

        ?>

    </div>


    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>