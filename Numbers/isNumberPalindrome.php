<?php

echo "Enter integer: ";
$num = trim(fgets(STDIN,1024));
if(!ctype_digit($num)){
    echo "Invalid input\n";
    exit();
}
$temp = $num;
$rev = 0;
while($num > 0){
    $rev = ($rev * 10) + ($num % 10);
    $num = (int)($num / 10);
}
if($rev == $temp){
    echo "The number $temp is a palindrome.\n";
}else{
    echo "The number $temp is not a palindrome.\n";
}