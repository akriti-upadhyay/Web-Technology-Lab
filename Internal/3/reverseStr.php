<?php

function myStrRev($string)
{
    $string_length = strlen($string);
    $reversed_string = '';
    for ($i = ($string_length - 1); $i >= 0; $i--) {
        $reversed_string .= $string[$i];
    }
    return $reversed_string;
}

$string = $_POST["string"];
echo "The reverse of string " . $string . " is: " . myStrRev($string);
