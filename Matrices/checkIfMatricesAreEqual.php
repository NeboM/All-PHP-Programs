<?php

echo "Enter number of columns for matrix 1: ";
$col1 = trim(fgets(STDIN,1024));
echo "Enter number of columns for matrix 2: ";
$col2 = trim(fgets(STDIN,1024));
echo "Enter number of rows for matrix 1: ";
$row1 = trim(fgets(STDIN,1024));
echo "Enter number of rows for matrix 2: ";
$row2 = trim(fgets(STDIN,1024));

if($col1 != $col2 || $row1 != $row2){
    echo "Matrices are not equal.\n";
    exit();
}

$matrix1 = [];
$matrix2 = [];

echo "Enter values for matrix 1: ";
for($i = 0; $i < $col1; $i++){
    for($j = 0; $j < $row1; $j++){
        $matrix1[$i][$j] = trim(fgets(STDIN,1024));
    }
}

echo "Enter values for matrix 2: ";
for($i = 0; $i < $col2; $i++){
    for($j = 0; $j < $row2; $j++){
        $matrix2[$i][$j] = trim(fgets(STDIN,1024));
    }
}

for($i = 0; $i < $col1; $i++){
    for($j = 0; $j < $row1; $j++){
        if($matrix1[$i][$j] != $matrix2[$i][$j]){
            echo "Matrices are not equal. \n";
            exit();
        }
    }
}

echo "Matrices are equal. \n";
