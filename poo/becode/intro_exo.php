<?php

class Connexion
{

    function __construct($bdd, $user, $mdp)
    {
        $this->bdd = $bdd;
        $this->user = $user;
        $this->mdp = $mdp;
    }

    function pdo()
    {
        return new PDO($this->bdd, $this->user, $this->mdp, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ]);
    }
    function countTable($sql)
    {
        $pdo = $this->pdo();

        $query = $pdo->query($sql);
        $countQuery = $query->fetchColumn();
        echo $countQuery;
    }
}

$con = new Connexion('mysql:host=localhost;dbname=carnetadresse;charset=UTF8', 'root', 'root27');

$con->countTable('SELECT count(name) from hiking');
