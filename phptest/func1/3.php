<?php

function union(...$arrays){
    $res1 = array_merge(...$arrays);
    $res2 = array_unique($res1);
    $res3 = [];
    return array_values($res2);
}

union(['a', 3, false], [true, false, 3], [false, 5, 8]); // ['a', 3, false, true, 5, 8]
