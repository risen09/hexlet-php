<?php

function getIntersectionOfSortedArray($arr1, $arr2){
    $result = [];
    $n = 0;
    $h = 0;
    for ($i = $n; $i < count($arr1); $i++){
        for ($j = $h; $j < count($arr2); $j++){
            if ($arr1[$i] === $arr2[$j]){
                $result[] = $arr1[$i];
                if (count($arr1) > count($arr2)){
                    $n = $i;
                } else {
                    $h = $j;
                }
            }
        }
    }
    return $result;
}

print_r(getIntersectionOfSortedArray([10, 11, 24], [10, 13, 14, 18, 24, 30]));
print_r(getIntersectionOfSortedArray([10, 11, 24], [-2, 3, 4]));
print_r(getIntersectionOfSortedArray([], [2]));