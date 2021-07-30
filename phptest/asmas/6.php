<?php

function pick($arr, $item){
    $result = [];
    foreach ($arr as $key => $value){
        foreach ($item as $item2)
            if ($key === $item2){
                $result[$key] = $value;
            }
    }
    return $result;
}

$data = [
    'user' => 'ubuntu',
    'cores' => 4,
    'os' => 'linux',
    'null' => null
];
 
print_r(pick($data, ['user']));
print_r(pick($data, ['user', 'os']));
print_r(pick($data, []));
print_r(pick($data, ['none']));
print_r(pick($data, ['null']));