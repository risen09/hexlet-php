<?php

function run(string $text)
{
    // BEGIN (write your solution here)
    $last = function($str1){
        if (isset($str1[0])){
            return($str1[strlen($str1)-1]);
        } else {
            return null;
        }
    };
    // END

    return $last($text);
}

echo run('kids');
echo run('0');