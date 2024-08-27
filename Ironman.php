<?php

// Armatura 

require 'ParteSuperiore.php';
require 'ParteInferiore.php';

class Ironman
{
    public $parteSuperiore;
    public $parteInferiore;
    public static $counter = 0;

    public function __construct(ParteInferiore $parteInferiore, ParteSuperiore $parteSuperiore)
    {
        $this->parteInferiore = $parteInferiore;
        $this->parteSuperiore = $parteSuperiore;
        Ironman::$counter++;
    }

    public function attaccare()
    {
        $this->parteSuperiore->attacco();
    }

    public function volare()
    {
        $this->parteInferiore->volo();
    }
}
