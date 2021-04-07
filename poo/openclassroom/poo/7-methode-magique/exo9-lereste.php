<?php

// to string
class MaClasse
{
    protected $texte;

    public function __construct($texte)
    {
        $this->texte = $texte;
    }

    public function __toString()
    {
        return $this->texte;
    }
}

$obj = new MaClasse('Hello world !');

// Solution 1 : le cast

$texte = (string) $obj;
var_dump($texte); // Affiche : string(13) "Hello world !".

// Solution 2 : directement dans un echo
echo $obj; // Affiche : Hello world !


class Export
{
    protected $chaine1, $chaine2;

    public function __construct($param1, $param2)
    {
        $this->chaine1 = $param1;
        $this->chaine2 = $param2;
    }

    public function __set_state($valeurs) // Liste des attributs de l'objet en paramètre.
    {
        $obj = new Export($valeurs['chaine1'], $valeurs['chaine2']); // On crée un objet avec les attributs de l'objet que l'on veut exporter.
        return $obj; // on retourne l'objet créé.
    }
}

$obj1 = new Export('Hello ', 'world !');

eval('$obj2 = ' . var_export($obj1, true) . ';'); // On crée un autre objet, celui-ci ayant les mêmes attributs que l'objet précédent.

echo '<pre>', print_r($obj2, true), '</pre>';


// invoke

class MaClasse
{
    public function __invoke($argument)
    {
        echo $argument;
    }
}

$obj = new MaClasse;

$obj(5); // Affiche « 5 ».


// debug info


class FileReader
{
    protected $f;

    public function __construct($path)
    {
        $this->f = fopen($path, 'c+');
    }

    public function __debugInfo()
    {
        return ['f' => fstat($this->f)];
    }
}

$f = new FileReader('fichier.txt');
var_dump($f); // Affiche les informations retournées par fstat.