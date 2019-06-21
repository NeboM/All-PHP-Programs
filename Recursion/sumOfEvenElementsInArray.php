<?php


$array = range(1,26);


function sum($array,$size = 0,$sum = 0){
  if($size == sizeof($array) - 1){
    if($array[sizeof($array)-1] % 2 == 0){
      $sum = $sum + $array[sizeof($array)-1];
    }
    return $sum;
  }else if($array[$size] % 2 == 0){
    $sum = $sum + $array[$size];
    return sum($array,$size + 1,$sum);
  }else{
    return sum($array,$size + 1,$sum);
  }
}


echo sum($array) . "\n";
