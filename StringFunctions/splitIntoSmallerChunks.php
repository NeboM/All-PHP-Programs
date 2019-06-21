<?php

$string = "082307";

echo substr(chunk_split($string,2,":"),0,-1) . "\n";