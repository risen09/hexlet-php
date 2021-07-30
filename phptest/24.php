<?php

function rev($arr2){
    $result = [];
    foreach($arr2 as $rv){
        if(is_array($rv)){
            
            $result[] = $rv;
            
        } else {
            $result[] = $rv;
        }
    }
    return $result;
}

function flatten($arr){
    if(empty($arr)){
        return [];
    }
    $result = [];
    $ph = [];
    foreach($arr as $item){
        if(is_array($item)){
           $ph = rev($item);
           $result = [...$result, ...$ph];
        } else {
            $result[] = $item;
        }
    }
    return $result;
}

print_r(flatten([]));
print_r(flatten([1, [[2], [3]], [9]]));