<?php

use Funct\Collection;

function getManWithLeastFriends($arr){
    // $resmap = array_map(fn($item) => count($item['friends']) = , $arr);
    $res1 = array_reduce($arr, function ($acc, $domain) {
        $acc[$domain['name']] = [$domain['name'], 'friend' => count($domain['friends'])];
        return $acc;
    }, []);
    // $res2 = Collection\minValue($res1, function ($elem) {
    //     return $elem;
    // });
    print_r($res1);
    return $res1;
    // Collection\minValue($arr, function($elem) {
    //     return $elem[''];
    // });
    
}

$users = [
    ['name' => 'Tirion', 'friends' => [
        ['name' => 'Mira', 'gender' => 'female'],
        ['name' => 'Ramsey', 'gender' => 'male']
    ]],
    ['name' => 'Bronn', 'friends' => []],
    ['name' => 'Sam', 'friends' => [
        ['name' => 'Aria', 'gender' => 'female'],
        ['name' => 'Keit', 'gender' => 'female']
    ]],
    ['name' => 'Keit', 'friends' => []],
    ['name' => 'Rob', 'friends' => [
        ['name' => 'Taywin', 'gender' => 'male']
    ]],
];
 
getManWithLeastFriends($users);