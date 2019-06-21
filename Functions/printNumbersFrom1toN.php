<?php

function printNumbers($n) : string {
    $str = "";
    for($i = 1; $i <= $n; $i++){
        $str = $str . "$i ";
    }
    return $str . "\n";
}

echo printNumbers(10);