<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch</title>
</head>

<body>
    <?php
    $age = 14;

    switch ($age) {
        case 1:
        case 2:
        case 3:
        case 4:
            echo "This work is really bad. What a dumb kid! ";
            break;
        case 5:
        case 6:
        case 7:
        case 8:
        case 9:
            echo "This is not sufficient. More studying is required.";
            break;
        case 10:
            echo "barely enough!";
            break;
        case 11:
        case 12:
        case 13:
        case 14:
            echo "Not bad!";
            break;
        case 19:
        case 20:
            echo "Too good to be true : confront the cheater!";
            break;
        default:
            echo "Bravo, bravissimo!";
    }
    ?>
    <form method="get" action="">
        <label for="name">Are you a human, a cat or a unicorn ?</label>
        <input type="" name="name"><br>
    </form>
    <?php

    $photo = ['https://media1.giphy.com/media/Ta3v3I4GI1gH7Rqek6/giphy.gif?cid=ecf05e474zzg1jvhnz6wiomjvz43c6a3wc1ztft056k3izvx&rid=giphy.gif', 'https://media3.giphy.com/media/BzyTuYCmvSORqs1ABM/giphy.gif?cid=ecf05e47cbvfmdyh2vyoos5ixuu76blrc5emlmquagbyq7vd&rid=giphy.gif', 'https://media1.giphy.com/media/kZuruX5l9fhxQms7Co/giphy.gif?cid=ecf05e4722dga1my3orhvvk389dkojm9a36tb4wkiqqpap4b&rid=giphy.gif'];


    if ($_GET['name']) {
        $i = ($_GET['name'] == "human" ? 0
            : ($_GET['name'] == "cat" ? 1
                : ($_GET['name'] == "unicorn" ? 2
                    : 3)));
    }
    echo $i;
    ?>


</body>

</html>