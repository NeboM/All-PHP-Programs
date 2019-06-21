<?php

echo "Enter string: \n";
$string = trim(fgets(STDIN,1024));
echo str_word_count($string) . "\n";