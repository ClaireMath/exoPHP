<?php

function my_strlen($string)
{
    $chars = 0;
    while (isset($string[$chars])) {
        $chars++;
    }
    return $chars;
}

echo my_strlen("Hello");
echo PHP_EOL;
echo my_strlen("Hello\nWorld!\n\0Coucou!"); 
echo PHP_EOL;
echo my_strlen("Cette string possède 29 chars");
echo PHP_EOL;


?>
