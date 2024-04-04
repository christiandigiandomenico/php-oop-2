<?php

require_once __DIR__ . "/Traits/Sizeable.php";
class Product
{
    use Sizeable;

    public $nome;
    public $prezzo;
    public $genere;
    public $picture;
    public $categoria;


    function __construct($nome, $prezzo, $genere, $picture, $categoria, $sizeSmall, $sizeBig)
    {
        $this->nome = $nome;
        if (is_numeric($prezzo)) {

            $this->prezzo = $prezzo;
        } else {
            // se notiamo che sta succedendo qualcosa che non vorremmo
            throw new Exception("Il prezzo inserito non è di valore numerico");
        }
        $this->genere = $genere;
        $this->picture = $picture;
        $this->categoria = $categoria;
        $this->sizeSmall = $sizeSmall;
        $this->sizeBig = $sizeBig;
    }
}
