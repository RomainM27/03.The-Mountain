<?php

require 'pdo.php';

$error = null; 
$success = null;
try {
    if(isset($_POST['name']) && isset($_POST['difficulty']) && isset($_POST['distance']) && isset($_POST['duration']) && isset($_POST['height_difference'])){
        $query= $pdo->prepare('INSERT INTO `hiking`(`name`, `difficulty`, `distance`, `duration`, `height_difference`) VALUES (:name,:difficulty,:distance,:duration,:height_difference)');
        $query->execute([
            'name' => $_POST['name'],
            'difficulty' => $_POST['difficulty'],
            'distance' => $_POST['distance'],
            'duration' => $_POST['duration'],
            'height_difference' => $_POST['height_difference']
        ]);
        $success = "La rando a bien été ajouté";
    }
} catch (PDOException $e) {
    $error = $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ajouter une randonnée</title>
	<link rel="stylesheet" href="css/basics.css" media="screen" title="no title" charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body class="container">
	<a class="btn btn-dark" href="./read.php">Liste des données</a>
    <?php if ($success): ?>
        <div class="alert alert-success"><?= $success ?></div>
    <?php endif ?>
	<h1>Ajouter</h1>
	<form action="" method="post">
		<div>
			<label class="form-label" for="name">Name</label>
			<input type="text" name="name" value="">
		</div>

		<div>
			<label class="form-label" for="difficulty">Difficulté</label>
			<select name="difficulty">
				<option value="très facile">Très facile</option>
				<option value="facile">Facile</option>
				<option value="moyen">Moyen</option>
				<option value="difficile">Difficile</option>
				<option value="très difficile">Très difficile</option>
			</select>
		</div>

		<div>
			<label class="form-label" for="distance">Distance</label>
			<input type="text" name="distance" value="">
		</div>
		<div>
			<label class="form-label" for="duration">Durée</label>
			<input type="time" name="duration" value="">
		</div>
		<div>
			<label class="form-label" for="height_difference">Dénivelé</label>
			<input type="text" name="height_difference" value="">
		</div>
		<button class="btn btn-primary" type="submit" name="button">Envoyer</button>
	</form>
</body>
</html>
