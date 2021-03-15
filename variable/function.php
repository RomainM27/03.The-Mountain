<?php 
$str  = 'According to a researcher (sic) at Cambridge University, it doesn\'t matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole.';

//echo str_shuffle($str);
echo '<hr>';

echo shuffle_str($str);

function shuffle_str($str){
    $arr = explode(" ", $str);

    $shufflee = function($word){
        if ( strlen($word) > 3){
            $fristletter = substr($word,0,1);
            $lastletter = substr($word,-1);
            $allletter = str_shuffle(substr($word,1,strlen($word)-2));
            $word =  $fristletter.$allletter.$lastletter;
            return $word;
        }else {
            return $word;      
        }
    };
    $arrMap = array_map($shufflee,$arr);
    $arr =implode(" ", $arrMap);
    return $arr;
}

function toLower($string)
{
    $string = strtolower($string);
    return $string;
}

echo toLower("STOP YELLING I CAN'T HEAR MYSELF THINKING!!");
// Volume of a cone which ray is 5 and height is 2 
$volume = 5 * 5 * 3.14 * 2 * (1/3);  
echo 'The volume of a cone which ray is 5 and height is 2 = ' . $volume . ' cm<sup>3</sup><br />';  
$volume = 3 * 3 * 3.14 * 4 * (1/3);  
echo 'The volume of a cone which ray is 3 and height is 4 = ' . $volume . ' cm<sup>3</sup><br />'; 

function calculate_cone_volume($ray, $height){
    $volume = $ray * $ray * 3.14 * $height * (1/3);
    echo "The volume of a cone which ray is {$ray} and height is {$height} = {$volume} cm<sup>3</sup><br /> ";
}
calculate_cone_volume(5, 2);
?>