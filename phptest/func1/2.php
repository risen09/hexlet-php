<?php

function average($a=null,...$arr){
    if (isset($a)){
        $res1 = count($arr) + 1;
        $res2 = array_sum($arr) + $a;
        return $res2/$res1;
    } else {
        return null;
    } 
}

echo average(0); // 0
echo average(0, 10); // 5
echo average(-3, 4, 2, 10); // 3.25
echo average(); // null