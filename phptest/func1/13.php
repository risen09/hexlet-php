<?php

function without($arr1, ...$arr2){
    $filterres = array_filter($arr1, fn($item) => !in_array($item, $arr2));
    return $filterres;
}

without(['3', 2], 3, 5, 11);
without([3, 4, 10, 4, 'true'], 4);
without([], null);