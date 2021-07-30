<?php
 
function get($arr, $ch, $op = null){
    if(array_key_exists($ch, $arr)){
        return $arr[$ch];
    } else{
        $word = $arr[$ch] ?? $op;
        return $word;
    }   
 }

$cities = ['moscow', 'london', 'berlin', 'porto', null];
get($cities, 1, 5); // london
get($cities, 10, 'paris'); // paris
get($cities, 4); // null
get($cities, 4, 'default'); // null