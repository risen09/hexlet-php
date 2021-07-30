<?php

function buildQueryString($arr){
    ksort($arr);
    $result = [];
    foreach ($arr as $key => $value){
        $result[] = "{$key}={$value}";
    }
    $result2 = implode('&', $result);
    return $result2;
}

echo buildQueryString(['per' => 10, 'page' => 1 ]);
