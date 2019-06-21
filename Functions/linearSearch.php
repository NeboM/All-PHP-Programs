<?php

function linearSearch($arr,$value){
    for($index = 0; $index < sizeof($arr); $index++){
        if($arr[$index] == $value){
            return $index;
        }
    }
    return -1;
}


$arr = array(1,2,5,3,6,8,9,12,4);
echo linearSearch($arr,4) . "\n";