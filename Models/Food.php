<?php

class Food
{
    protected $nome;
    protected $prezzo;
    protected $genere;


    function __construct($nome, $prezzo, $genere)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->genere = $genere;
    }
}
