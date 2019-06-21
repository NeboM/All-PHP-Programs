<?php

echo "Enter integer: ";
$num = trim(fgets(STDIN,1024));
if(!ctype_digit($num)){
    echo "Invalid input\n";
    exit();
}
for($i = 1; $i <= $num; $i = $i + 2){
    echo $i . "\n";
}