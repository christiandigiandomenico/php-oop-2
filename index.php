<?php

require './Models/Food.php';
require './Models/Game.php';
require './Models/Product.php';

$croccantini = new Food("Croccantini Plus", "19.99", "Cibo", "./img/crocchetta.webp", "Cane");
$cibo = new Food("Cibo per cani", "7.99", "Cibo", "./img/cibocani.jpg", "Gatto");

$pallina = new Game("Palla da gioco", "5.99", "Giocattolo", "./img/palla.jpg", "Gatto");
$osso = new Game("Osso Masticabile", "6.50", "Giocattolo", "./img/osso.jpg", "Cane");

$cuccia = new Product("Cuccia per cane", "90.00", "Prodotto", "./img/cucciacane.jpg", "Cane");
$cuccia2 = new Product("Cuccia per gatto", "24.00", "Prodotto", "./img/cucciagatto.jpg", "Gatto");

var_dump($croccantini)

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

    foreach ($Food as $foods) {

        echo '<div class="card" style="width: 18rem;">
<div class="card-body">
    <h5 class="card-title">' . $foods->nome . '</h5>
    <h6 class="card-subtitle mb-2 text-body-secondary">' . $foods->prezzo . '</h6>
    <h6 class="card-subtitle mb-2 text-body-secondary">' . $foods->genere . '</h6>
    <h6 class="card-subtitle mb-2 text-body-secondary">'
            . $foods->categoria .
            '</h6>
</div>
</div>';
    }

    ?>


    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>