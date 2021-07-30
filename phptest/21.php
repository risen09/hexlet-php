<?php

function checkIfBalanced($arr){
    $stak = [];
    $flag = false;
    for ($i = 0; $i < strlen($arr); $i++){
        if ($arr[$i] === "("){
            array_push($stak, $arr[$i]);
        } else {
            if ($arr[$i] === ")"){
                $res1 = array_pop($stak);
                $res2 = "{$res1}{$arr[$i]}";
                if ($res2 === "()"){
                    $flag = true;
                } else {
                    $flag = false;
                }
            }
        }
    }
    if ($stak) {
        return false;
    }
    return $flag;
}

var_dump(checkIfBalanced('(5 + 6) * (7 + 8)/(4 + 3)'));
var_dump(checkIfBalanced('(4 + 3))'));