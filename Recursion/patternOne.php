<?php

echo "Enter number: ";
$num = (int)trim(fgets(STDIN,1024));

function pattern($num, $index = 0){
  if($index === $num){
    return;
  }else{
    ++$index;
    for($i = 0; $i < $index; $i++){
      echo "*";
    }
    echo "\n";
    return pattern($num, $index);
  }
}

pattern($num);

/* Output example 

Enter number: 10
*
**
***
****
*****
******
*******
********
*********
**********

*/
