<?php

$matrix = [
    [5,2,3],
    [1,5,0],
    [3,8,5]
];

$diagonal1 = 0;
$diagonal2 = 0;

for($i = 0; $i < 3; $i++){
    for($j = 0; $j < 3; $j++){
        if($i == $j){
            $diagonal1 = $diagonal1 + $matrix[$i][$j];
        }
        if($i + $j == sizeof($matrix) - 1){
            $diagonal2 = $diagonal2 + $matrix[$i][$j];
        }
    }
}
echo "Sum of diagonal 1 is: $diagonal1 \n";
echo "Sum of diagonal 2 is: $diagonal2 \n";
