<?php 

require 'pdo.php';

$error = null; 

try {
    if(isset($_POST['login']) && isset($_POST['password'])){
        $username=$_POST['login'];
        $password=password_hash($_POST['password'], PASSWORD_DEFAULT);


        $checkQuery="SELECT * FROM user where login=:uname";
        $check = $pdo -> prepare($checkQuery);
        $check->bindParam(':uname',$username,PDO::PARAM_STR);
        $check->execute();

        if($check->rowCount() == 0) {
        $query= $pdo->prepare('INSERT INTO `user`(`login`, `password`) VALUES (:login,:pwd)');
        $query->bindParam(':login',$username);
        $query->bindParam(':pwd',$password);
        $query->execute();
        header("Location: ./connecter.php");
        }else {
            $error="User already exist. Try again";
        }

        
    } 
} catch (PDOException $e) {
    $error = $e->getMessage();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body> 
    <div class="container my-5">
        <?php if($error): ?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php endif ?>
        <form action="" method="post">
            <div>
                <label class="form-label" for="login">Login :</label>
                <input type="text" name="login" value="">
            </div>
            <div>
                <label class="form-label" for="password">password : </label>
                <input type="password" name="password" value="">
            </div>
        
            <button class="btn btn-primary" type="submit" name="button">s enregistrer</button>
        </form>
    </div>
</body>
</html>