<?php
class MaClasse
{
    public function __call($nom, $arguments)
    {
        echo 'La méthode <strong>', $nom, '</strong> a été appelée alors qu\'elle n\'existe pas ! Ses arguments étaient les suivants : <strong>', implode($arguments, '</strong>, <strong>'), '</strong><br />';
    }

    public static function __callStatic($nom, $arguments)
    {
        echo 'La méthode <strong>', $nom, '</strong> a été appelée dans un contexte statique alors qu\'elle n\'existe pas ! Ses arguments étaient les suivants : <strong>', implode($arguments, '</strong>, <strong>'), '</strong><br />';
    }
}

$obj = new MaClasse;

$obj->methode(123, 'test');

MaClasse::methodeStatique(456, 'autre test');
