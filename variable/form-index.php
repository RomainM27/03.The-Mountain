<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <?php
    
    ?>

    <form method="post" action="form.php">
    <label for="fullname">First name:</label><br>
    <input type="text" id="fullname" name="fulname"><br>
    <label for="age">age:</label><br>
    <input type="number" id="age" name="age"><br>
    <p> Do you prefer Andy Warhol or Basquiat?</p>
    <input type="radio" id="Warhol" name="AB" value="Andy Warhol">
    <label for="AB">Andy Warhol</label>
    <input type="radio" id="Basquiat" name="AB" value="Basquiat">
    <label for="AB">Basquiat</label><br>
    <label for="biography">Tell me about your life:</label><br>
    <textarea name="biography" id="biography">I was born in...</textarea><br>
    <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>