<?php


function generateRandomString($upper = 2, $lower = 3, $numeric = 4, $other = 6) : string {
    $string = array();

    for($i = 0; $i < $upper; $i++){
        array_push($string,chr(rand(65,90)));
    }

    for($i = 0; $i < $lower; $i++){
        array_push($string,chr(rand(97,122)));
    }

    for($i = 0; $i < $numeric; $i++){
        array_push($string,chr(rand(48,57)));
    }

    for($i = 0; $i < $other; $i++){
        array_push($string,chr(rand(33,47)));
    }

    shuffle($string);
    return implode("",$string);

}
for($i = 0; $i < 5; $i++){
    echo $i+1 . ") ". generateRandomString() . "\n";
}
