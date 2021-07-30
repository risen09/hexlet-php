<?php

function bubbleSort($arr){
    for ($j = 0; $j < count($arr) - 1; $j++)
        for ($i = 0; $i < count($arr) - 1; $i++){
            if ($arr[$i] > $arr[$i+1]){
                $sort1 = $arr[$i + 1];
                $arr[$i + 1] = $arr[$i];
                $arr[$i] = $sort1;
            }
        }
    return $arr;
}

print_r(bubbleSort([3, 10, 4, 3]));