<?php

require 'pdo.php';
session_start();
$error = null;
var_dump($_POST);
try {

    if (isset($_POST["button"])) {
        var_dump($_POST);
        $login = $_POST['login'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        var_dump($password);


        $sql = "SELECT login, password FROM user WHERE (login=:login)";
        $query = $pdo->prepare($sql);
        $query->bindParam(':login', $login, PDO::PARAM_STR);
        $query->execute();


        // $result = $query->fetch();
        // var_dump($result);
        // var_dump($query);
        // echo $query->rowCount();


        $result = $query->fetch();
        var_dump($result);
        if (password_verify($_POST["password"], $result->password)) {
            $_SESSION["login"] = $login;
            exit(header("location:read.php"));
        } else {
            echo "'Invalid Dessstails'";
        }
    }
} catch (PDOException $e) {
    $error = $e->getMessage();
}
