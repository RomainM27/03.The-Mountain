<?php 
// require 'pdo.php';
// require './vendor/autoload.php';
require 'manager.php';

// try{
//     $query = $pdo->query("SELECT * FROM company where company_id = {$_GET['id']} ");

//     $rando = $query->fetchAll();

// } catch(PDOException $e){
//     $error = $e->getMessage();
// }
dump( $_POST);
if (isset($_GET['id'])){
    $rando = (new Company)->companyById($_GET['id']);
}

if (isset($_POST)){
    (new Company)->companyByIdUpdate($_POST);
    $rando = (new Company)->companyById($_POST['company_id']);

}
dump( $rando);



require './templates/update.php';