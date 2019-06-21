<?php

echo "Enter integer: ";
$num = trim(fgets(STDIN,1024));
if(!ctype_digit($num)){
    echo "Invalid input\n";
    exit();
}
$sum = 0;
$temp = $num;
while($temp > 0){
    $sum += $temp % 10;
    $temp = $temp / 10;
}
echo $sum . "\n";