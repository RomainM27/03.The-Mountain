<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>

<body>
    <?php

    $countries = ['belgique', 'france'];
    var_dump($countries);
    echo '<pre>';
    print_r($countries);
    echo '</pre>';

    // array push
    // long
    //array_push($countries, 'England');
    // short
    $countries[] = 'England';

    var_dump($countries);

    $person['function'] = 'Junior Web Developer';
    $person['function'] = 'Senior Web Developer';
    echo $person['function'];

    $user = array(
        'firstname' => 'Juan',
        'lastname' => 'Pablo',
        'adress' => '3 Paradijsestraat',
        'city' => 'Antwerpen'
    );
    var_dump($user);
    echo $user['lastname'];

    $me = array(
        'age'    => 45,
        'firstname'         => 'Alexandre',
        'lastname'               => 'Plennevaux',
        'favourite_movies'     => array('My Own Private Idaho', 'Her', 'Matrix')
    );

    echo '<pre>';
    print_r($me);
    echo '</pre>';
    var_dump($me);
    $me['hobbies'] = ["playing", "coding", "dormir"];

    echo '<pre>';
    print_r($me);
    echo '</pre>';

    //mother
    $mother = array(
        'age'    => 56,
        'firstname'         => 'france',
        'lastname'               => 'dewat',
        'favourite_movies'     => array('matrix', 'idk', 'amour dans le pres'),
        'hobbiers' => array('potterie', 'ennuyer son fils', 'trico')
    );

    $me['mother'] = $mother;
    echo '<pre>';
    print_r($me);
    echo '</pre>';

    echo '<pre>';
    print_r(count($me['mother']['hobbiers']));
    echo '</pre>';
    echo '<pre>';
    print_r(count($me['hobbies']));
    echo '</pre>';
    echo '<pre>';
    print_r(count($me['hobbies']) + count($me['mother']['hobbiers']));
    echo '</pre>';

    $me['hobbies'][] = 'Taxidermy ';
    echo '<pre>';
    print_r($me);
    echo '</pre>';
    $me['lastname'] = 'Durand';
    echo '<pre>';
    print_r($me);
    echo '</pre>';

    $soulmate = array(
        'type' => "moche",
        'dent' => "pas de dents",
        'cheveux' => "chauve",
        'taille' => "grande",
        'hobbies' => array('manger', 'dormir', 'jouer')
    );

    // perform array operation
    $possible_hobbies_via_intersection = array_intersect($soulmate['hobbies'], $me['hobbies']);
    $possible_hobbies_via_merge = array_merge($me,$soulmate);

    echo '<pre>';
    print_r($possible_hobbies_via_intersection);
    print_r($possible_hobbies_via_merge);
    echo '</pre>';



    $web_development = array(
        'frontend' => [],
        'backend' => [],
    );

    $web_development['frontend'][] ='xhtml' ;
    $web_development['backend'][] = 'Ruby on Rails';
    $web_development['frontend'][] ='CSS' ;
    $web_development['backend'][] ='Flash' ;
    $web_development['frontend'][] ='JavaScript' ;
   
    //$web_development['frontend'][] ='xhtml' ;
    var_dump($web_development);


    $pos = array_search('xhtml', $web_development['frontend']);
    if ($pos !== FALSE)
    {
        $web_development['frontend'][$pos] = 'html';
    }
    var_dump($web_development);

    array_splice($web_development['backend'],-1);

    var_dump($web_development);
    ?>



</body>

</html>