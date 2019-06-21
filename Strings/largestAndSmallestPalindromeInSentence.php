<?php
echo "Enter string: \n";
$string = trim(fgets(STDIN,1024));
$words = preg_split('/ +/', $string);
$i = 0;
$maxPalindrome = $minPalindrome = "";
for($i = 0; $i < sizeof($words); $i++){
    if($words[$i] == strrev($words[$i])){
        $maxPalindrome = $words[$i];
        $minPalindrome = $words[$i];
        break;
    }
}

for($j = $i; $j < sizeof($words); $j++){

    if($words[$j] == strrev($words[$j]) && strlen($words[$j]) > strlen($maxPalindrome)){
        $maxPalindrome = $words[$j];
    }
    if($words[$j] == strrev($words[$j]) && strlen($words[$j]) < strlen($minPalindrome)){
        $minPalindrome = $words[$j];
    }

}
if(empty($maxPalindrome) || empty($minPalindrome)){
    echo "Palindrome not found in given string.\n";
}else{
    echo "Largest: $maxPalindrome\nSmallest: $minPalindrome\n";
}

