<?php


$elements = array();
function goThroughAllElements($arr){
    foreach($arr as $element){
        if(is_array($element)){
            goThroughAllElements($element);
        }else{
            array_push($GLOBALS['elements'],$element);
        }
    }

}

$arr = array(10,15,array(10,20,array(10,50),array(30)));
goThroughAllElements($arr);

$avg = array_sum($elements) / sizeof($elements);

echo sprintf("%0.2f",$avg) . "\n";
