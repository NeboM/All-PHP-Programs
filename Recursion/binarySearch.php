<?php

$array = range(1,30);

echo "Enter number between 1 and 30: ";
$num = (int)trim(fgets(STDIN,1024));

function binarySearch($array,$value,$lowIndex = 0, $highIndex = 29){
  if($lowIndex > $highIndex){
    echo "Not found.\n";
    return false;
  }else{
    $middleIndex = (int)(($lowIndex + $highIndex) / 2);
    if($array[$middleIndex] > $value){
      $highIndex = $middleIndex - 1;
      return binarySearch($array,$value,$lowIndex,$highIndex);
    }else if($array[$middleIndex] < $value){
      $lowIndex = $middleIndex + 1;
      return binarySearch($array,$value,$lowIndex,$highIndex);
    }else{
      echo "Found a match for $value at index $middleIndex";
      return true;
    }
  }
}


binarySearch($array,$num);
