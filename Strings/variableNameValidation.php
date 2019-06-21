<?php


function isvar_valid($varName) : string {
    if(preg_match('/^[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*$/',$varName))
        return "Valid variable name\n";
    else
        return "Invalid variable name.\n";
}

echo "Enter variable name: \n";
$string = fgets(STDIN,1024);

echo isvar_valid($string);

