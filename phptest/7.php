<?php

function swap($arr, $ch){
    if($ch === 0 || $ch === count($arr) - 1){
        return $arr;
    }else {
        $res1 = $arr[$ch - 1];
        $arr[$ch - 1] = $arr[$ch + 1];
        $arr[$ch + 1] = $res1;
        return $arr;
    }
}

$names = ['john', 'smith', 'karl'];

$result = swap($names, 2);
print_r($result);