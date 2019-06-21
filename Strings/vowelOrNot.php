<?php
$vowels = array('a','e','i','o','u');
$char = '';
do{
    echo "Enter char: \n";
    $char = trim(fgets(STDIN,1024));
}while(!ctype_alpha($char) || strlen($char) != 1);

if(in_array(strtolower($char),$vowels)){
    echo "$char is vowel\n";
}else{
    echo "$char is not vowel\n";
}