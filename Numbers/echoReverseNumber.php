<?php
echo "Enter integer: ";
$num = trim(fgets(STDIN,1024));
if(!ctype_digit($num)){
    echo "Invalid input\n";
    exit();
}
$rev = 0;
while($num > 0){
    $rev = ($rev * 10) + ($num % 10);
    $num = (int)($num / 10);
}
echo $rev . "\n";

