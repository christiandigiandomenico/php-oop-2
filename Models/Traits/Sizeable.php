<?php

trait Sizeable
{

    public $sizeSmall;
    public $sizeBig;

    public function getAllPrices()
    {
        return "Prezzo piccolo: " . $this->sizeSmall . "€<br>Prezzo medio: " . $this->size . "€<br>Prezzo grande: " . $this->sizeBig . '€';
    }
}
