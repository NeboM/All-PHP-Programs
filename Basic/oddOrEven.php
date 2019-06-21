<?php

echo "Enter integer: ";
$num = trim(fgets(STDIN,1024));
if(!ctype_digit($num)){
    echo "Invalid input\n";
    exit();
}
if($num%2 == 0){
    echo "Even\n";
}else{
    echo "Odd\n";
}

