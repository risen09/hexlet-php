<?php

function getSameParity($arr){
    $resarr = [];
    if (empty($arr)){
        return $arr;
    }
    if($arr[0] % 2 === 0){
        for($i = 0; $i < count($arr); $i++){
            if($arr[$i] % 2 === 0){
                $resarr[] = $arr[$i];
            }
        }
    } else {
        for($i = 0; $i < count($arr); $i++){
            if($arr[$i] % 2 != 0){
                $resarr[] = $arr[$i];
            }
        }
    }
    return $resarr;
}

print_r(getSameParity([])); 