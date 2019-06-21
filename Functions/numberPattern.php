<?php

function numberPattern($number){
    $num = 0;

    for($i = 0;  ; $i++){
        for($j = 0; $j <= $i ; $j++){
            echo ++$num . " ";
            if($num == $number){
                return;
            }
        }
        echo "\n";
    }
}


numberPattern(21);