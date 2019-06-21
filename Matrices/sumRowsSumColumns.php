<?php

$matrix = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];


for($i = 0; $i < 3; $i++){
    $rows = 0;
    $columns = 0;
    for($j = 0; $j < 3; $j++){
        $rows = $rows + $matrix[$i][$j];
        $columns = $columns + $matrix[$j][$i];
    }
    echo "Sum of row $i is: $rows\n";
    echo "Sum of column $i is: $columns\n";
}