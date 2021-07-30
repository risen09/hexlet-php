<?php

function capitalizeWords($sentence)
{
    $words = explode(' ', $sentence);
    $capitalizedWords = [];
    foreach ($words as $word) {
        $capitalizedWords[] = ucfirst($word);
    }
    return implode(' ', $capitalizedWords);
}

$greeting = 'hello from Malasia';
print_r(capitalizeWords($greeting));
// => Hello From Malasia


$text = 'Hello Friend';
$parts = mb_str_split($text, 3);

print_r($parts);