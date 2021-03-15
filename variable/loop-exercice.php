<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    //$i = 1;
    // while ($i <= 100) {
    //     echo  '<br/>'.$i;
    //     $i ++;
    // }

        // for ($i=1; $i < 101; $i++) { 
        //     # code...
        //     echo  '<br/>'.$i;
        //     $i ++;
        // }


    $pays = array('BE'=>'Belgique', 'FR'=>'France', 'NL' => 'Nederlands', 'DE' => 'Allemagne', 'US' => ' United State');
?>
<form action="">
    <label for="country">Choose a country:</label><br/>
    <select id="country" name="country">
    <?php 
    foreach ($pays as $key => $value) {
        echo '<option value="'.$key.'">'.$value.'</option>';
    }
    ?>
    </select><br/>
<input type="submit">
</form>
</body>
</html>