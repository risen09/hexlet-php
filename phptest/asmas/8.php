<?php

function genDiff($arr1, $arr2){
    $result = [];
    foreach ($arr1 as $key1 => $value1){
        if (isset($arr2[$key1])){
            if ($value1 === $arr2[$key1]){
                $result[$key1] = 'unchanged';
            } else {
                $result[$key1] = 'changed';
            }
        } else {
            $result[$key1] = 'deleted';
        }
    }
    $resarr2 = array_keys($arr2);
    foreach ($resarr2 as $key2){
        if (!isset($arr1[$key2])){
            $result[$key2] = 'added';
        }
    }
    return $result;
}

$result = genDiff(
    ['one' => 'eon', 'two' => 'two', 'four' => true],
    ['two' => 'own', 'zero' => 4, 'four' => true]
);

print_r($result);