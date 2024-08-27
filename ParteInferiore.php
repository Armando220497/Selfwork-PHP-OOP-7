<?php

abstract class ParteInferiore
{
    abstract public function volo();
}

class Propulsori extends ParteInferiore
{
    public function volo()
    {
        echo "Vola via\n";
    }
}

class Salto extends ParteInferiore
{
    public function volo()
    {
        echo "Salta via\n";
    }
}
