
<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=carnetadresse', 'root', 'root27');
    foreach($dbh->query('SELECT * from octocats') as $row) {
        echo '<pre>';
        print_r($row);
        echo '</pre>';
    }
    $dbh = null;
    } catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>
