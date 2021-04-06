<?php
function chargerClasse($classe)
{
    require $classe . '.php';
}

spl_autoload_register('chargerClasse');


$voiture1 = [
    "ima" => "DE-1535483",
    "dateInit" => 01 / 02 / 2020,
    "km" => 350,
    "marque" => "renaud",
    "modele" => "cabriole",
    "couleur" => "noir",
    "poid" => 4.5
];
$voit1 = new Voiture($voiture1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="container">
    <h1>Les voitures</h1>
    <table>
        <?php $voit1->test(); ?>
    </table>
</body>

</html>