<?php

echo "Enter integer: ";
$num = trim(fgets(STDIN,1024));
if(!ctype_digit($num)){
    echo "Invalid input\n";
    exit();
}
$sum = 0;
foreach(range(1, $num) as $number){
    $sum += $number;
}
echo $sum . "\n";