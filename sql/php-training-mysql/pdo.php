<?php
$dsn = 'mysql:host=localhost;dbname=carnetadresse;charset=UTF8;';
$user = 'root';
$password = 'root27';

$pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
]);

?>

