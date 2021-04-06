<?php
function chargerClasse($classe)
{
    require $classe . '.php';
}

spl_autoload_register('chargerClasse');


$voiture1 = [
    "ima" => "DE-1535483",
    "dateInit" => "15-06-1995",
    "km" => 350,
    "marque" => "audi",
    "modele" => "test",
    "couleur" => "noir",
    "poid" => 4.5,
    "img" => ""
];
$voiture2 = [
    "ima" => "DE-1535483",
    "dateInit" => "01-01-2018",
    "km" => 0,
    "marque" => "BMW",
    "modele" => "i8 coupe",
    "couleur" => "argent",
    "poid" => 1.5,
    "img" => "chrome_mIkkGugYvz.png"
];
$voiture3 = [
    "ima" => "BE-1535483",
    "dateInit" => "05-03-2012",
    "km" => 110,
    "marque" => "Peaugeot",
    "modele" => "boxer",
    "couleur" => "gris",
    "poid" => 2.5,
    "img" => "chrome_YtJtrpzpND.png"
];
$voiture4 = [
    "ima" => "FR-1535483",
    "dateInit" => "01-01-1983",
    "km" => 180,
    "marque" => "Alfa Romeo",
    "modele" => "Milano",
    "couleur" => "blanc",
    "poid" => 0.9,
    "img" => "chrome_VwiVveRxxK.png"
];
$voiture5 = [
    "ima" => "DE-1535483",
    "dateInit" => "27-12-1999",
    "km" => 210,
    "marque" => "Camion",
    "modele" => "Camion",
    "couleur" => "Vert",
    "poid" => 4.5,
    "img" => ""
];
$voit1 = new Voiture($voiture1);
$voit2 = new Voiture($voiture2);
$voit3 = new Voiture($voiture3);
$voit4 = new Voiture($voiture4);
$voit5 = new Voiture($voiture5);
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
    <h1 class="my-5">Les voitures</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Ima</th>
                <th scope="col">Pays</th>
                <th scope="col">Modele</th>
                <th scope="col">Marque</th>
                <th scope="col">Utilitaire</th>
                <th scope="col">Couleur</th>
                <th scope="col">Poid</th>
                <th scope="col">Km</th>
                <th scope="col">Usure</th>
                <th scope="col">Free</th>
                <th scope="col">Prem Mise en circu</th>
                <th scope="col">Année en circu</th>
            </tr>
        </thead>
        <tbody>
            <?php $voit1->test();
            $voit1->display();
            $voit2->display();
            $voit3->display();
            $voit4->display();
            $voit5->display();
            ?>
        </tbody>
    </table>
</body>

</html>