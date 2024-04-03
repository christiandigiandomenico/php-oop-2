<?php

class Game  extends Product
{
    public $peso;

    function __construct($nome, $prezzo, $genere, $picture, $categoria, $peso)
    {
        parent::__construct($nome, $prezzo, $genere, $picture, $categoria);
        $this->peso = $peso;
    }
}
