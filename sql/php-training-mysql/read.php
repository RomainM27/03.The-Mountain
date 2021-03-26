<?php 
require 'pdo.php';
$error = null;
try{
    $query = $pdo->query('SELECT * FROM hiking');

    $rando = $query->fetchAll();

} catch(PDOException $e){
    $error = $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Randonnées</title>
        <link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1 class="text-primary my-5">Liste des randonnées</h1>
            <table class="table table-hover">
            <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Difficulty</th>
                <th>Distance</th>
                <th>Duration</th>
                <th>Height difference</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($rando as $rando):?>
            <tr>
                <td><?= $rando->id; ?></td>
                <td><?= $rando->name; ?></td>
                <td><?= $rando->difficulty; ?></td>
                <td><?= $rando->distance; ?></td>
                <td><?= $rando->duration; ?></td>
                <td><?= $rando->height_difference; ?></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
            </table>
        </div>
    </body>
</html>
