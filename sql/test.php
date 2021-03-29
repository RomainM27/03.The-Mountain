
<?php
// try {
//     $dbh = new PDO('mysql:host=localhost;dbname=carnetadresse', 'root', 'root27');
//     foreach($dbh->query('SELECT * from octocats') as $row) {
//         echo '<pre>';
//         print_r($row);
//         echo '</pre>';
//     }
//     $dbh = null;
//     } catch (PDOException $e) {
//     print "Erreur !: " . $e->getMessage() . "<br/>";
//     die();
// }

echo password_hash("ThisIsAPassword", PASSWORD_DEFAULT);
//$2y$10$.vGA1O9wmRjrwAVjuoshdyenNpDczlqm3Jq7KnEd1rVAGv3Fykk1a
echo "<br>";
$options = [
    'cost' => 12,
];
echo "<br>";
echo password_hash("ThisIsAPassword", PASSWORD_BCRYPT, $options);
//$2y$12$QjSH496pcT5CEbzjD/vtVeH03tfHKFy36d4J0Ltp3lRtee9HDxY3K
echo "<br>";
echo password_hash('rasmuslerdorf', PASSWORD_ARGON2I);
//$argon2i$v=19$m=1024,t=2,p=2$YzJBSzV4TUhkMzc3d3laeg$zqU/1IN0/AogfP4cmSJI1vc8lpXRW9/S0sYY2i2jHT0
?>
