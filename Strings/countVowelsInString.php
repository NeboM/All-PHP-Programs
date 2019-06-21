<?php

echo "Enter string: \n";
$string = trim(fgets(STDIN,1024));
$matches = preg_match_all('/[aeiouAEIOU]/',$string);
echo "$matches characters are vowels.\n";