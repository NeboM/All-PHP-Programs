<?php
echo "Enter string: \n";
$string = trim(fgets(STDIN,1024));
$words = preg_split('/ +/', $string);
$unique = array_unique($words);
$string = implode(" ",$unique) . "\n";
echo $string;