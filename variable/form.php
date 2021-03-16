<?php 
echo "<pre>";
print_r($_POST);


// we initiate an array that will contain any potential errors.
$errors = array();
// 1. Sanitisation
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);

// 2. Validation
if (false === filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "This address is invalid.";
}

// 3. execution
if (count($errors)> 0){
	echo "There are mistakes!";
	print_r($errors);
	exit;
}
// If we get here, it's because everything's fine, we can record
$bdd = new PDO('mysql:host=localhost;dbname=test','root', '');
//...

// 4. Display the response interface.
?>