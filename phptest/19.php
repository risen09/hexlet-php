<?php

function countUniqChars($text){
    if (isset($text[0]) === false){
        return 0;
    }
    $arr = str_split($text);
    $res = [];
    foreach ($arr as $item){
        $prov = in_array($item, $res, true);
        if ($prov === false){
            $res [] = $item;
        }
    }   
    return count($res);
}

$text2 = '';
print_r(countUniqChars($text2));