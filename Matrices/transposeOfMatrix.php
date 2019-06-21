<?php

$col = 2;
$row = 4;

$matrix = [
    [1,2,3,4],
    [1,2,3,4]
];

$tMatrix = [];


for($i = 0; $i < $row; $i++){
    for($j = 0; $j < $col; $j++){
        $tMatrix[$i][$j] = $matrix[$j][$i];
    }
}


for($i = 0; $i < $row; $i++){
    for($j = 0; $j < $col; $j++){
        echo " " . $tMatrix[$i][$j];
    }
    echo "\n";
}
