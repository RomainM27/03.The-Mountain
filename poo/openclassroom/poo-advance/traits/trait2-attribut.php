<?php
trait MonTrait
{
    protected $attr = 'Hello !';

    public function showAttr()
    {
        echo $this->attr;
    }
}

class MaClasse
{
    use MonTrait;
}

$fille = new MaClasse;
$fille->showAttr();






trait A
{
    public function saySomething()
    {
        echo 'Je suis le trait A !';
    }
}

trait B
{
    use A;

    public function saySomethingElse()
    {
        echo 'Je suis le trait B !';
    }
}

class MaClasse
{
    use B;
}

$o = new MaClasse;
$o->saySomething(); // Affiche « Je suis le trait A ! »
$o->saySomethingElse(); // Affiche « Je suis le trait B ! »





trait A
{
    public function saySomething()
    {
        echo 'Je suis le trait A !';
    }
}

class MaClasse
{
    use A {
        saySomething as protected;
    }
}

$o = new MaClasse;
$o->saySomething(); // Lèvera une erreur fatale car on tente d'accéder à une méthode protégée.\







trait A
{
    public function saySomething()
    {
        echo 'Je suis le trait A !';
    }
}

class MaClasse
{
    use A {
        saySomething as sayWhoYouAre;
    }
}

$o = new MaClasse;
$o->sayWhoYouAre(); // Affichera « Je suis le trait A ! »
$o->saySomething(); // Affichera « Je suis le trait A ! »










trait A
{
    public function saySomething()
    {
        echo 'Je suis le trait A !';
    }
}

class MaClasse
{
    use A {
        saySomething as protected sayWhoYouAre;
    }
}

$o = new MaClasse;
$o->saySomething(); // Affichera « Je suis le trait A ! ».
$o->sayWhoYouAre(); // Lèvera une erreur fatale, car l'alias créé est une méthode protégée.