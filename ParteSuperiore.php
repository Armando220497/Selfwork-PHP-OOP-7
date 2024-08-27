<?php

abstract class ParteSuperiore
{
    abstract public function attacco();
}

class Missili extends ParteSuperiore
{
    public function attacco()
    {
        echo "Spara missili \n";
    }
}

class Mitra extends ParteSuperiore
{
    public function attacco()
    {
        echo "Spara proiettili \n";
    }
}
