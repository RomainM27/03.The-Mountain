<?php 
// require 'pdo.php';
// require './vendor/autoload.php';
require 'manager.php';

// try{
//     $query = $pdo->query('SELECT * FROM company');

//     $rando = $query->fetchAll();

// } catch(PDOException $e){
//     $error = $e->getMessage();
// }

$rando = (new Company)->allCompany();

dump($rando);
require './templates/home.php';