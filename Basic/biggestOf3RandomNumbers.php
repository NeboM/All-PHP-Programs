<?php

$num1 = rand(1,100);
$num2 = rand(1,100);
$num3 = rand(1,100);

if($num1 > $num2 && $num1 > $num3){
    echo "$num1 is bigger than $num2 and $num3 \n";
}else if($num2 > $num3 && $num2 > $num1){
    echo "$num2 is bigger than $num1 and $num3 \n";
}else if($num3 > $num1 && $num3 > $num2){
    echo "$num3 is bigger than $num1 and $num2 \n";
}else{
    echo "They are the same. \n";
}