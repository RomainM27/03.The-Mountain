<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>excuse</title>
</head>

<body>
    <?php
    setlocale(LC_ALL, "fr_FR");
    date_default_timezone_set("Europe/Paris");
    $now = date('l\, d F Y');

    $genderPhrase = "";
    $excusePhrase = "";
    // define variables and set to empty values
    $name = $nameT = $gender = $excuse = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test_input($_POST["name"]);
        $nameT = test_input($_POST["nameT"]);
        $excuse = test_input($_POST["excuse"]);
        $gender = test_input($_POST["gender"]);
    }
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if (isset($_POST["excuse"])) {
        switch ($_POST["excuse"]) {
            case 1:
                $excusePhrase = " s’est éveillé ce matin le $now avec un fort mal de tête, et je ne pense même qu’il a de la fièvre. J’ai donc jugé plus prudent de le pas le conduire à l’école aujourd’hui, et d’appeler le médecin.<br><br>
                
                J’ignore encore, ce matin, si il sera absent plusieurs jours, mais je ne manquerai pas de vous le faire savoir, sur ce cahier de liaison, dès que le docteur aura établi un diagnostic médical.<br><br>
                
                Croyez, monsieur/madame à mes sentiments les meilleurs.";
                break;
            case 2:
                $excusePhrase = " devrait nous accompagner , mon épouse et moi, ce  $now à l’enterrement de notre chien décédée inopinément samedi.<br><br>

                Pouvez-vous donc lui accorder une autorisation de sortie pour cette matinée? Il devrait être de retour dans votre établissement scolaire avant la reprise des cours de l’après-midi, le même jour.<br><br>

                En vous remerciant de votre compréhension, je vous prie de croire à mes sentiments distingués.";
                break;
            case 3:
                $excusePhrase = "est arrivé en retard le $now au lycée, mais il n’en est pas responsables.<br><br>

                En effet, nous sommes sortis très tard avec eux hier soir, et nous avons préféré leur accorder deux de sommeil supplémentaires au lieu de l obliger à se rendre au lycée trop fatigué, pour que cette journée soit vraiment profitable.<br><br>

                Vous voudrez donc bien ne pas en tenir rigueur, et de notre côté nous veillerons bien évidemment à ce que cela ne se reproduise pas<br><br>

                Merci pour votre compréhension.";
                break;

            case 4:
                $excusePhrase = "est arrivé en retard au collège ce $now car il a loupé son car scolaire ce matin.<br><br>
                Ce mot d’excuse vous confirme que le retard de notre enfant s’explique bien par un problème de réveil qui a occasionné une non-prise du bus scolaire.<br><br>
            
                Nous veillerons à ce que cette situation ne se renouvelle pas.<br><br>
                Merci";
                break;

            case 5:
                $excusePhrase = " sera absente le $now et n’ira pas au lycée pour des raisons familiales et personnelles.<br><br>

                Si vous souhaitez avoir des précisions sur le motif de cette absence scolaire vous pouvez me contacter sur mon téléphone portable.<br><br>

                Cordialement";
                break;
            default:
                echo " problem";
        }
    }

    if (isset($_POST["gender"])) {
        $genderPhrase = ($_POST["gender"] == 'male') ? 'Notre fils ' . $name : 'Notre fille ' . $name;
    }
    if (isset($_POST["nameT"]) and isset($_POST["name"]) and isset($_POST["excuse"]) and isset($_POST["gender"])) {
        echo "<h3> $nameT, </h3> 
    <p> $genderPhrase  $excusePhrase<p>
    ";
    }



    ?>
    <h1>Excuse automatizer</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name of the child :</label>
        <input type="text" name="name"><br>
        <input type="radio" name="gender" value="male">
        <label for="male">Male</label>
        <input type="radio" name="gender" value="female">
        <label for="female">Female</label><br>
        <label for="nameT">Name of the teacher :</label>
        <input type="text" name="nameT"><br>
        <p>Reason for the absence :</p>
        <input type="radio" name="excuse" value="1">
        <label for="male">illness</label><br>
        <input type="radio" name="excuse" value="2">
        <label for="female">death of the pet</label><br>
        <input type="radio" name="excuse" value="3">
        <label for="other">significant extra-curricular activity</label><br>
        <input type="radio" name="excuse" value="4">
        <label for="other">Bus lost </label><br>
        <input type="radio" name="excuse" value="5">
        <label for="other">Excuse with no presiction</label><br>
        <input type="submit" name="submit" value="Automat Excuse">
    </form>

    <?php

    ?>
</body>

</html>