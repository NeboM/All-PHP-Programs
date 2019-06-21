<?php

echo "Enter integer: ";
$num = trim(fgets(STDIN,1024));
if(!ctype_digit($num)){
    echo "Invalid input\n";
    exit();
}

$associative_array = array();
$temp = $num;
while($num > 0){
    $digit = $num % 10;
    if($digit == 0)
        break;
    if(array_key_exists($digit,$associative_array)){
        $associative_array[$digit] = $associative_array[$digit] + 1;
    }else{
        $associative_array[$digit] = 1;
    }
    $num = $num / 10;
}
foreach($associative_array as $key => $value){
    echo "$key repeats $value times in $temp\n";
}