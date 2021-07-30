<?php

function countWords($arr){
    if (empty($arr)){
        return [];
    }
    $res1 = explode(' ',$arr);
    $result = [];
    foreach ($res1 as $word){
        $res2 = mb_strtolower($word);
        $result[$res2] = ($result[$res2] ?? 0) + 1;

    }
    return $result;
}

$text1 = '';
print_r(countWords($text1));