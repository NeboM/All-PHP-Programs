<?php

echo "Enter number: ";
$num = (int)trim(fgets(STDIN,1024));

function pattern($num){
  if($num === 0){
    return;
  }else{
    for($i = 0; $i < $num; $i++){
      echo "*";
    }
    echo "\n";
    return pattern(--$num);
  }
}

pattern($num);

/* Output example

Enter number: 10
**********
*********
********
*******
******
*****
****
***
**
*


*/
