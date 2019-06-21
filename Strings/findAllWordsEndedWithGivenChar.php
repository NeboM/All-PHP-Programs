<?php
echo "Enter string: \n";
$string = trim(fgets(STDIN,1024));
do{
    echo "Enter char: \n";
    $char = trim(fgets(STDIN,1024));
}while(!ctype_alpha($char) || strlen($char) != 1);
$words = preg_split('/ +/',$string);
foreach($words as $word){
    if(substr($word,-1) == $char){
        echo $word . "\n";
    }
}