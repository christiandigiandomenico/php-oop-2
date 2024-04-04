<?php

require_once __DIR__ . "/Traits/Sizeable.php";
class Food extends Product
{

    use Sizeable;

    protected $peso;


    function __construct($nome, $prezzo, $genere, $picture, $categoria, $peso, $sizeSmall, $sizeBig)
    {
        parent::__construct($nome, $prezzo, $genere, $picture, $categoria, $sizeSmall, $sizeBig);
        $this->peso = $peso;
        $this->sizeSmall = $sizeSmall;
        $this->sizeBig = $sizeBig;
    }


    public function setPeso($peso)
    {
        $this->peso = $peso;
    }

    public function getPeso()
    {
        return $this->peso;
    }
}
