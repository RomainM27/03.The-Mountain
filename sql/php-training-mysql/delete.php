<?php
/**** Supprimer une randonnée ****/

if(isset($_GET['id'])){
    require 'pdo.php';

    $error = null;
    try{
        $query = $pdo->prepare('DELETE FROM `hiking` WHERE id= :id');
        $query->execute([
            'id' => $_GET['id']
        ]);
        
    }catch (PDOException $e) {
        $error = $e->getMessage();
    }
    if(!($error)){

        header("Location: ./read.php");
    }else{
        echo $error;
    }
}
?>