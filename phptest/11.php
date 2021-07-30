<?php

function calculateAverage($arr){
    if (count($arr) === 0) {
        return 0;
    }
    $sum = 0;
    foreach ($arr as $nb) {
        $sum = $sum + $nb;
    }
    return $sum/count($arr);
}
$temperatures = [];
 
print_r(calculateAverage($temperatures));