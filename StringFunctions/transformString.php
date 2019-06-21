<?php
/*
    a) transform a string all uppercase letters.
    b) transform a string all lowercase letters.
    c) make a string's first character uppercase.
    d) make a string's first character of all the words uppercase.
 */


echo "Enter string: \n";
$string = trim(fgets(STDIN,1024));

echo  strtoupper($string) . "\n";
echo  strtolower($string) . "\n";
echo  ucfirst($string) . "\n";
echo  ucwords($string) . "\n";