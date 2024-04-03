<?php

class Product
{
    public $nome;
    public $prezzo;
    public $genere;
    public $picture;
    public $categoria;


    function __construct($nome, $prezzo, $genere, $picture, $categoria)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->genere = $genere;
        $this->picture = $picture;
        $this->categoria = $categoria;
    }
}
