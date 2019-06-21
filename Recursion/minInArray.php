<?php

$array = range(-50,50);
shuffle($array);

function findMinInArray($array,$min,$index = 0){
  if($index === sizeof($array) - 1){
    if($min > $array[$index]){
      $min = $array[$index];
    }
    return $min;
  }else if($array[$index] < $min){
    $min = $array[$index];
  }
  return findMinInArray($array,$min,++$index);
}

echo findMinInArray($array,$array[0]) . "\n";
