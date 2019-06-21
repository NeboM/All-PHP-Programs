<?php

echo "Enter number: ";
$num = (int)trim(fgets(STDIN,1024));

function countRepeatedDigits($num,$arr){
  if($num == 0){
    return $arr;
  }else{
    $key = $num % 10;
    $num = (int)($num / 10);
    if(array_key_exists($key,$arr)){
      $arr[$key]++;
    }else{
      $arr[$key] = 1;
    }
    return countRepeatedDigits($num,$arr);
  }
}
$arr = array();
$arr = countRepeatedDigits($num,$arr);
print_r($arr);
