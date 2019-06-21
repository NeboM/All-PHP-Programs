<?php

$arr = array(array(12,2,array(123,array(43))),array(12,3,34,array(array(88))),3,5);


function goThroughAllElements($arr){
  foreach($arr as $value){
    if(is_array($value)){
      goThroughAllElements($value);
    }else{
      echo $value . "\n";
    }
  }
}

goThroughAllElements($arr);
