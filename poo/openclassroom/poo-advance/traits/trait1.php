<?php
trait HTMLFormater
{
    public function format($text)
    {
        return '<p>Date : ' . date('d/m/Y') . '</p>' . "\n" .
            '<p>' . nl2br($text) . '</p>';
    }
}


trait TextFormater
{
    public function formatText($text)
    {
        return 'Date : ' . date('d/m/Y') . "\n" . $text;
    }
}


class Writer
{
    use HTMLFormater, TextFormater {
        HTMLFormater::format insteadof TextFormater;
    }

    public function write($text)
    {
        file_put_contents('fichier.txt', $this->format($text));
    }
}


class Mailer
{
    use HTMLFormater;

    public function send($text)
    {
        mail('login@fai.tld', 'Test avec les traits', $this->format($text));
    }
}



$w = new Writer;
$w->write('Hello world!');

$m = new Mailer;
$m->send('Hello world!');









trait MonTrait
{
    public function sayHello()
    {
        echo 'Hello !';
    }
}

class MaClasse
{
    use MonTrait;

    public function sayHello()
    {
        echo 'Bonjour !';
    }
}

$objet = new MaClasse;
$objet->sayHello(); // Affiche « Bonjour ! ».












trait MonTrait
{
    public function speak()
    {
        echo 'Je suis un trait !';
    }
}

class Mere
{
    public function speak()
    {
        echo 'Je suis une classe mère !';
    }
}

class Fille extends Mere
{
    use MonTrait;
}

$fille = new Fille;
$fille->speak(); // Affiche « Je suis un trait ! »