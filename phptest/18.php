<?php

function getSameCount($arr1, $arr2){
    $result = [];
    foreach ($arr1 as $item1){
        foreach ($arr2 as $item2){
            if ($item1 === $item2){
                $prov = in_array($item1, $result, true);
                if ($prov === false){
                    $result [] = $item1;
                }              
            }
        }
    }
    return count($result);
}

print_r(getSameCount([1, 3, 2, 2], [3, 1, 1, 2]));
print_r(getSameCount([], []));
