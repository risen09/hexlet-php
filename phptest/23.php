<?php

function getDistance(array $point1, array $point2)
{
    [$x1, $y1] = $point1;
    [$x2, $y2] = $point2;

    $xs = $x2 - $x1;
    $ys = $y2 - $y1;

    return sqrt($xs ** 2 + $ys ** 2);
}

function getTheNearestLocation($arr1, $arr2){
    if(empty($arr1)){
        return null;
    }
    $min2 = 0;
    [,$ph] = $arr1[0];
    $min1 = getDistance($ph, $arr2);
    for ($i = 0; $i < count($arr1); $i++){
        [,$pr] = $arr1[$i];
        $res = getDistance($pr, $arr2);
        echo $res;
        echo "\n";
        echo $min1;
        echo "\n";
        if ($min1 > $res){
            $min1 = $res;
            $min2 += 1;
            echo 'это мин';
            echo $min1;
        }
    }
    return $arr1[$min2];
}

$locations = [
    ['Park', [10, 5]],
    ['Sea', [1, 3]],
    ['Museum', [8, 4]],
  ];

$currentPoint = [1, 3];
print_r(getTheNearestLocation($locations, $currentPoint));