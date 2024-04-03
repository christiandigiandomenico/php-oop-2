<?php

class Game
{
    protected $nome;
    protected $prezzo;
    protected $genere;
    protected $picture;
    protected $categoria;


    function __construct($nome, $prezzo, $genere, $picture, $categoria)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->genere = $genere;
        $this->picture = $picture;
        $this->categoria = $categoria;
    }
}
