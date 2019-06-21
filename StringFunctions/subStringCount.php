<?php

echo "Enter string: \n";
$string = trim(fgets(STDIN,1024));

echo "Enter substring: \n";
$substring = trim(fgets(STDIN,1024));

echo substr_count($string,$substring) . "\n";