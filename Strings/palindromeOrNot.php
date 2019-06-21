<?php

echo "Enter string: \n";
$string = trim(fgets(STDIN,1024));
if($string == strrev($string)){
    echo "The given string is Palindrome.\n";
}else{
    echo "The given string is not Palindrome.\n";
}