<?php

$myArray=range(1,10);
shuffle($myArray);

foreach($myArray as $number){
    echo "$number \n";
}

