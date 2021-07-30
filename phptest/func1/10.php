<?php

function getMenCountByYear($users){
    $oldest = array_reduce($users, function ($acc, $user) {
        return $user['birthday'] === $acc['birthday'] ? $user : $acc;
    }, $users[0]);
    print_r($oldest);
    $result = [];
    $newarr1 = array_filter($users, fn($item) => $item['gender'] === 'male');
    $newarr2 = array_map(fn($item) => $item['birthday'], $newarr1);
    foreach ($newarr2 as $elem){
        $result[date('Y', strtotime($elem))] = ($result[date('Y', strtotime($elem))] ?? 0) + 1;
    }
    print_r($result);
}

$users = [
    ['name' => 'Bronn', 'gender' => 'male', 'birthday' => '1973-03-23'],
    ['name' => 'Reigar', 'gender' => 'male', 'birthday' => '1973-11-03'],
    ['name' => 'Eiegon',  'gender' => 'male', 'birthday' => '1963-11-03'],
    ['name' => 'Sansa', 'gender' => 'female', 'birthday' => '2012-11-03'],
    ['name' => 'Jon', 'gender' => 'male', 'birthday' => '1980-11-03'],
    ['name' => 'Robb','gender' => 'male', 'birthday' => '1980-05-14'],
    ['name' => 'Tisha', 'gender' => 'female', 'birthday' => '2012-11-03'],
    ['name' => 'Rick', 'gender' => 'male', 'birthday' => '2012-11-03'],
    ['name' => 'Joffrey', 'gender' => 'male', 'birthday' => '1999-11-03'],
    ['name' => 'Edd', 'gender' => 'male', 'birthday' => '1973-11-03']
];
 
getMenCountByYear($users);