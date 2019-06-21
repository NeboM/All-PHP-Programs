<?php

function binarySearch($arr,$value){

    sort($arr);

    $lowIndex = 0;
    $highIndex = sizeof($arr) - 1;

    while($lowIndex <= $highIndex){
        $middleIndex = (int)(($highIndex + $lowIndex) / 2);
        if($arr[$middleIndex] < $value){
            $lowIndex = $middleIndex + 1;
        }else if($arr[$middleIndex] > $value){
            $highIndex = $middleIndex -1;
        }else{
            return $middleIndex;
        }
    }
    return -1;
}


$arr = array(1,2,5,3,6,8,9,12,4);
echo binarySearch($arr,4) . "\n";