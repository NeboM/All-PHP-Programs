<?php

echo "Enter integer: ";
$num = trim(fgets(STDIN,1024));
if(!ctype_digit($num)){
    echo "Invalid input\n";
    exit();
}
$x1 = 0;
$x2 = 1;
if($num == 1){
    echo $x1 . "\n";
    exit();
}
if($num == 2){
    echo $x2 . "\n";
    exit();
}
echo "$x1\n$x2\n";
while($num-- > 0){
    $x3 = $x1 + $x2;
    echo "$x3\n";
    $x1 = $x2;
    $x2 = $x3;
}
