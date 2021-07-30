<?php

function getIn($arr, $item){
    $flag = true;
    if (array_key_exists($item[0], $arr)){
        foreach ($item as $elem){
            if ($flag){
                $res1 = $arr[$elem];
                $flag = false;
            } elseif (isset($res1[$elem])) {
                $res1 = $res1[$elem];
            } else {
                return null;
            }
        }
        return $res1;
    } else {
        return null;
    }
}

$data = [
    null => 'ubuntu',
    'hosts' => [
        ['name' => 'web1'],
        ['name' => 'web2', null => 3, 'active' => false]
    ]
];

print_r(getIn($data, [null]));
print_r(getIn($data, ['hosts', 1, 'active']));
print_r(getIn($data, ['hosts', 1, null]));
print_r(getIn($data, ['undefined']));