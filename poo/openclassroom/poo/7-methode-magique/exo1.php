<?php
class MaClasse
{
    public function __construct()
    {
        echo 'Construction de MaClasse';
    }

    public function __destruct()
    {
        echo 'Destruction de MaClasse';
    }
}

$obj = new MaClasse;
