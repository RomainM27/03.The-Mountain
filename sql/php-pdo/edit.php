<?php 
/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:host=localhost;dbname=carnetadresse;charset=UTF8;';
$user = 'root';
$password = 'root27';

$pdo = new PDO($dsn, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
]);


$error = null; // gere le message d erreur
$success = null;
try{
    if(isset($_POST['ville']) && isset($_POST['haut']) && isset($_POST['bas'])){
        $query= $pdo->prepare('UPDATE météo SET ville = :ville, haut = :haut, bas = :bas WHERE ville = :ville');
        $query->execute([
            'ville' => $_POST['ville'],
            'haut' => $_POST['haut'],
            'bas' => $_POST['bas']
        ]);
        $success = "La ville a bien été changé";
    }
    $query = $pdo->prepare('SELECT * FROM météo  where ville = :id');
    $query->execute([
        'id' => $_GET['ville']
    ]);
    // prepare et execute plus safe
    $ville = $query->fetch();
} catch(PDOException $e){
    $error = $e->getMessage();
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<div class="container my-5">
    <p>
        <a href="./index.php">revenir a la liste</a>
    </p>
    <h2>Motifiez la ville ou le temps</h2>
    <?php if ($success): ?>
        <p class="alert alert-success"><?= $success ?></p>
    <?php endif ?>
    <?php if ($error): ?>
        <p><?= $error ?></p> 
        <!-- pas le mieux mais bien pour le debug -->
    <?php else: ?>
        <form action="" method="post">
            <div class="form-group">
                <input type="text" class="from-control" name="ville" value="<?= htmlentities($ville->ville) ?>">
            </div>
            <div class="form-group">
                <input type="text" class="from-control" name="haut" value="<?= htmlentities($ville->haut) ?>">
            </div>
            <div class="form-group">
                <input type="text" class="from-control" name="bas" value="<?= htmlentities($ville->bas) ?>">
            </div>
            <button class="btn btn-primary">Send</button>
        </form>

    <?php endif ?>
</div>