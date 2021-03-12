<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variable_types.php</title>
</head>

<body>
    <?php
    $name = "romain";
    $age = 24;
    $eye = "blue";
    $fami = array(0 => "mom", 1 => "sister");
    ?>
    <p>Hi! My name is <?php echo $name ?> !</p>
    <p>Hi! My name is <?php echo $name ?> !</p>
    <p>I am <?php echo $age ?> years old . </p>
    <p>My eyes are <?php echo $eye ?></p>
    <p>The first person in my family is <?php echo $fami[1] ?></p>
</body>

</html>