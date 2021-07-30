<?php

function addPrefix($arr, $str1){
    for($i = 0; $i < count($arr); $i++){
        $arr[$i] = "{$str1} {$arr[$i]}";
    }
    return $arr;
}

$names = ['john', 'smith', 'karl'];

$newNames = addPrefix($names, 'Mr');
print_r($newNames);