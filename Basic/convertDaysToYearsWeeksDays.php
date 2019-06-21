<?php

echo "Enter integer: ";
$num = trim(fgets(STDIN,1024));
if(!ctype_digit($num)){
    echo "Invalid input\n";
    exit();
}
$years = (int)($num / 365);
$weeks = (int)(($num % 365)/7);
$days = (int)(($num % 365)%7);
echo "$years years, $weeks weeks and $days days.\n";