<?php

function isContinuousSequence($arr){
    if (count($arr) === 0){
        return FALSE;
    }
    for($i = 0;$i < count($arr)-1; $i++){
        if ($arr[$i + 1] != $arr[$i] + 1) {
            return FALSE;
        }
    }
    return TRUE;
}
print_r(isContinuousSequence([5, 3, 2, 8]));
print_r(isContinuousSequence([-5, -4, -3]));
print_r(isContinuousSequence([10, 11, 12, 13]));
print_r(isContinuousSequence([10, 11, 12, 14, 15]));
print_r(isContinuousSequence([10, 11, 12, 14, 15]));
print_r(isContinuousSequence([]));
print_r(isContinuousSequence([7]));