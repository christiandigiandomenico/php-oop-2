<?php
class Food extends Product
{

    protected $peso;


    function __construct($nome, $prezzo, $genere, $picture, $categoria, $peso)
    {
        parent::__construct($nome, $prezzo, $genere, $picture, $categoria);
        $this->peso = $peso;
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
