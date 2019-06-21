<?php

/**
 * @param $string
 * @return string
 */
function reverse($string) : string{
    return strrev($string);
}

echo reverse("Hello World");