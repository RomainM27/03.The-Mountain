<?php
function chargerClasse($classe)
{
    require $classe . '.php';
}

spl_autoload_register('chargerClasse');

$check = array("vanille", "chocolat", "fraise");
$option = array("vanille", "chocolat", "fraise");
?>

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

    <div class="container col-10 col-md-10 col-xl-7">
        <?php
        echo "<h1>Formulaire</h1>";
        $form = new Form();
        echo $form->start("post", "test.php");
        echo $form->basic_input("text", "name");
        echo $form->basic_input("text", "lastname");
        echo $form->basic_input("number", "testid", "id");
        echo $form->basic_input("password", "psw");
        echo $form->check("checkbox", "Choissisez un gout", $check);
        echo $form->select("Choose one plz", $option);
        echo $form->check("radio", "Choissisez un gout", $check);
        echo $form->textarea("msg");
        echo $form->button("msg");
        echo $form->end();
        ?>
    </div>
</body>

</html>