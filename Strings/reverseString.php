<?php

echo "Enter string: \n";
$string = trim(fgets(STDIN,1024));
echo strrev($string)."\n";