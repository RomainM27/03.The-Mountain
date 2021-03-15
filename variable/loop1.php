
<?php 
    // $names= array('John', 'jeanne', 'Joan', 'émile');
    // foreach ($names as $name){
    //     echo ucfirst($name);
    // }
    // var_dump($names);

    $names= array('John', 'jeanne', 'Joan', 'émile');
    var_dump($names);

    foreach ($names as $key=> $value){
        $names[$key] = ucfirst($value);
    }
    var_dump($names);


    $pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');

    foreach ($pronouns as $value){
        if (strpos($value, 'He' ) !==false){
            echo '<br>' .$value .' codes';
        }else {
            echo '<br>' .$value .' code';
        }
    }


    $amount_of_lines = 1;

    while ($amount_of_lines <= 100)
    {
        echo $amount_of_lines . ". : I shall not watch flies fly when I'm learning PHP.<br />";
        // shorthand writing for 
        // $amount_of_lines = $amount_of_lines +1;
        $amount_of_lines ++; 

    }
    echo '************************** for ***********************************<br />';
    for ($amount_of_lines = 1; $amount_of_lines <= 100; $amount_of_lines ++)
    {
        echo $amount_of_lines . '. : I shall not watch flies fly when I\'m learning PHP.<br />';
    }
?>