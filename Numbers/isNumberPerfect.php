<?php

echo "Enter integer: ";
$num = trim(fgets(STDIN,1024));
if(!ctype_digit($num)){
    echo "Invalid input\n";
    exit();
}
$sum = 0;
for($i = 1; $i < $num; $i++) {
    if ($num % $i == 0){
        $sum += $i;
    }
}
if($sum == $num){
    echo "The given number $num is perfect.\n";
}else{
    echo "The given number $num is not perfect.\n";
}