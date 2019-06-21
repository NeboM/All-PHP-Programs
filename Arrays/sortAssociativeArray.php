<?php

$age=array("Peter"=>35,"Ben"=>37,"Joe"=>43,"Carl" => 14, "Alex" => 54);



echo "Sorting by key in ascending order: \n";
ksort($age);
foreach($age as $key => $value){
    echo "$key => $value\t";
}
echo "\n";


echo "Sorting by key in descending order: \n";
krsort($age);
foreach($age as $key => $value){
    echo "$key => $value\t";
}
echo "\n";


echo "Sorting by value in ascending order: \n";
asort($age);
foreach($age as $key => $value){
    echo "$key => $value\t";
}
echo "\n";


echo "Sorting by value in descending order: \n";
arsort($age);
foreach($age as $key => $value){
    echo "$key => $value\t";
}
echo "\n";





