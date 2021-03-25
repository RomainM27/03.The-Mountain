<?php 
/* Connect to a MySQL database using driver invocation */
$dsn = 'mysql:host=localhost;dbname=carnetadresse;charset=UTF8;';
$user = 'root';
$password = 'root27';

$pdo = new PDO($dsn, $user, $password);
/**
 *  prepare = requete prepare 
 * 
 *  exect permet d exececuter une requete remvoie pas les resultats mais le nbr de libre infecte
 * 
 * query excecute une requete sql
 * */

$query = $pdo->query('SELECT * FROM météo');
if (!($query)) {
    var_dump($pdo->errorInfo()) ;
    die('erreur SQL');
} // si query = false renvoie une erreur

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


$ville = $query->fetchAll();
// comme premiere fois on fait un print r
echo '<pre>';
print_r($ville);
echo '</pre>';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<br><form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <label>Ville</label>
    <input type="text" name="ville" id="ville"> <br>
    <label>Haut</label>
    <input type="text" name="haut" id="haut"><br>
    <label>Bas</label>
    <input type="text" name="bas" id="bas"><br>
    <button type="submit" name="submit" id="send">Send</button>
</form>
</body>
</html>