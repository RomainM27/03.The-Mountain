<?php

require './vendor/autoload.php';

class Company{
    
    private 
        $dsn = 'mysql:host=localhost;dbname=gocip;charset=UTF8;',
        $user = 'root',
        $password = 'root27';

    private function connection(){
        return new PDO($this->dsn, $this->user, $this->password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
        ]);
    }

    public function allCompany(){
        $pdo = $this->connection();
        $query = $pdo->query('SELECT * FROM company');

        return $query->fetchAll();
    }

    public function companyById($id){
        $pdo = $this->connection();
        $query = $pdo->query("SELECT * FROM company where company_id = {$id} ");
        return $query->fetch();
    }

    public function companyByIdUpdate($post){
        dump($post['company_name']);

        $pdo = $this->connection();
        $sql = "UPDATE `company` SET `company_name`= :name ,`company_country`= :country ,`company_tva`= :tva,`type_id`= :typeId WHERE company_id= :id";

       
        $prep= $pdo->prepare($sql);
        $prep->execute([
            'name' => $_POST['company_name'],
            'country' => $_POST['company_country'],
            'tva' => $_POST['company_tva'],
            'typeId' => $_POST['type_id'],
            'id' => $_POST['company_id']
        ]);

        // $prep= $pdo->prepare('UPDATE `hiking` SET `name`=:name,`difficulty`=:difficulty,`distance`=:distance,`duration`=:duration,`height_difference`=:height_difference WHERE id = :id');
        // $prep->execute([
        //     'name' => $_POST['name'],
        //     'difficulty' => $_POST['difficulty'],
        //     'distance' => $_POST['distance'],
        //     'duration' => $_POST['duration'],
        //     'height_difference' => $_POST['height_difference'],
        //     'id' => $_GET['id']
        // ]);
        // $success = "La rando a bien été modifié";
        // header("Location: ./update.php?id={$_GET['id']}");
    }
}