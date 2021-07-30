<?php

function getTotalAmount($arr,$word){
    $sum = 0;
    for($i = 0; $i < count($arr); $i++) {
        $per1 = "";
        $per2 = "";
        $word1 = $arr[$i];
        for($j = 0; $j < strlen($word1); $j++){
            if($j < 3){
                $per1 = "{$per1}{$word1[$j]}";
            }
            if($j > 3){
                $per2 = "{$per2}{$word1[$j]}";
            }
        }
        if ($per1 === $word){
            $sum = $sum + (int) $per2;
        }
    }
    return $sum;
}

$money1 = ['eur 10', 'usd 1', 'usd 10', 'rub 50', 'usd 5'];
print_r(getTotalAmount($money1, "usd"));