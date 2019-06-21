<?php

$numbers=array(35,37,43,14,54);
$arrToInsert = array(99);

array_splice($numbers,3,0,$arrToInsert);

foreach($numbers as $number){
    echo "$number \n";
}