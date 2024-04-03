<?php

class Food
{
    protected $nome;
    protected $prezzo;
    protected $genere;
    protected $picture;
    protected $categoria;


    function __construct($nome, $prezzo, $genere)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->genere = $genere;
    }
}
