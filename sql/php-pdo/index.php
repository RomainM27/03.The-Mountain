<?php 
/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:host=localhost;dbname=carnetadresse;charset=UTF8;';
$user = 'root';
$password = 'root27';

$pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
]);

/**
 *  prepare = requete prepare 
 * 
 *  exect permet d exececuter une requete remvoie pas les resultats mais le nbr de libre infecte
 * 
 * query excecute une requete sql
 * 
 * */
//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // exception
// on peut mettre un 3 eme argument -> set attribut 
// et on genere une exception

$error = null; // gere le message d erreur
try{

    if(isset($_POST['ville']) && isset($_POST['haut']) && isset($_POST['bas'])){
        $query= $pdo->prepare('INSERT INTO météo (ville, haut, bas) VALUES (:ville, :haut, :bas)');
        $query->execute([
            'ville' => $_POST['ville'],
            'haut' => $_POST['haut'],
            'bas' => $_POST['bas']
        ]);
        header('Location: ./edit.php?ville='.$_POST['ville']);
        // header('Location: ./edit.php?' . $pdo->lastInsertId());
        exit();
    }
    $query = $pdo->query('SELECT * FROM météo');


    // if (!($query)) {
    //     var_dump($pdo->errorInfo()) ;
    //     die('erreur SQL');    plus oblige car on a mit une exception
    // } // si query = false renvoie une erreur

    /**
     * apres on obtient un pdo statement
     * 
     * excecute lors d une methode prepareee
     * 
     * fetch pour un resultat
     * 
     * fetchAll pour tout les resultats
     * 
     * 
     * fetchColumn pour une colone 
     */


    //$ville = $query->fetchAll(PDO::FETCH_OBJ);
    $ville = $query->fetchAll();
    /**
     * on recupere les donne numerica et assoc
     * 
     * si on met PDO::FETCH_ASSOC que les assiotiatif
     * 
     * PDO::FETCH_BOUND lier les variables au colum(complique)
     * 
     * PDO::FETCH_CLASS recup les donnes sous une instance d une class
     * 
     * PDO::FETCH_INTO insere les resultat dans une instance deja cree
     * 
     * PDO::FETCH_LAZY une combinaise des 2  PDO::FETCH_BOTH and PDO::FETCH_OBJ
     * 
     * PDO::FETCH_NAMED retourne un tableau
     * 
     * PDO::FETCH_NUM resultat index par un num
     * 
     * PDO::FETCH_OBJ sous forme d un obj anonym
     * 
     * PDO::FETCH_PROPS_LATE une classe est cree avant
     */

    // comme premiere fois on fait un print r
    // echo '<pre>';
    // print_r($ville[0]->haut);
    // echo '</pre>';  exemple 
} catch(PDOException $e){
    $error = $e->getMessage();
}
?>
<!-- try{
}catch (PDOException $e) {
    $error = $e->getMessage();
} -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container">
    <h2> Ajouter une ville</h2>
    <form action="" method="post">
        <div class="form-group">
            <input type="text" class="from-control" name="ville" value="">
        </div>
        <div class="form-group">
            <input type="text" class="from-control" name="haut" value="">
        </div>
        <div class="form-group">
            <input type="text" class="from-control" name="bas" value="">
        </div>
        <button class="btn btn-primary">Send</button>
    </form>

    <?php if ($error): ?>
    <p><?= $error ?></p> 
    <!-- pas le mieux mais bien pour le debug -->
<?php else: ?>
    
        <?php  foreach($ville as $ville): ?> 
        <h3 class= "my-3"> <a href="./edit.php?ville=<?= $ville->ville ?>"><?= htmlentities($ville->ville) ?></a> </h3>
        <p> 
            Max = <?= htmlentities($ville->haut) ?>
        </p>
        <p> 
            Min = <?= htmlentities($ville->bas) ?>
        </p>
        <?php endforeach ?>
    

<?php endif ?>
</div>

</body>
</html>