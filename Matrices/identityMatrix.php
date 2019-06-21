<?php

$matrix1 = [
    [1,2,3,4],
    [4,5,6,4],
    [7,8,9,4]
];

$matrix2 = [
    [1,0,0,0],
    [0,1,0,0],
    [0,0,1,0],
    [0,0,0,1]
];

$flag = true;

for($i = 0; $i < 4; $i++){
    for($j = 0; $j < 4; $j++){
        if($i === $j && $matrix1[$i][$j] != 1){
            $flag = false;
            break;
        }else if($i != $j && $matrix1[$i][$j] != 0){
            $flag = false;
            break;
        }
    }
    if($flag == false){
        echo "Matrix 1 is not an identity matrix \n";
        break;
    }
}
if($flag)
    echo "Matrix 1 is an identity matrix \n";


$flag = true;


for($i = 0; $i < 4; $i++){
    for($j = 0; $j < 4; $j++){
        if($i === $j && $matrix2[$i][$j] != 1){
            $flag = false;
            break;
        }else if($i != $j && $matrix2[$i][$j] != 0){
            $flag = false;
            break;
        }
    }
    if($flag == false){
        echo "Matrix 2 is not an identity matrix \n";
        break;
    }
}
if($flag)
    echo "Matrix 2 is an identity matrix \n";

