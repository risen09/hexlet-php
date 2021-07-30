<?php

function getGirlFriends($arr){
    $newarr = array_map(fn($item) => $item['friends'], $arr);
    $res1 = flatten($newarr, 1);
    $filteredUsers = array_filter($res1, fn($item) => $item['gender'] === 'female');
    return $filteredUsers;
}

// function getGirlFriends($arr){
//     $newarr = array_map(fn($item) => $item['friends'], $arr);
//     $res1 = flatten($newarr, 1);
//     $filteredUsers = array_filter($res1, fn($item) => $item['gender'] === 'female');
//     return array_values($filteredUsers);
// }

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
    ['name' => 'Rob', 'friends' => [
        ['name' => 'Taywin', 'gender' => 'male']
    ]],
];
 
getGirlFriends($users);