<?php

function takeOldest($users, $nb1=1){
    $cmp = fn($a, $b) => $a['birthday'] <=> $b['birthday'];
    usort($users, $cmp);
    return Collection\firstN($users, $nb1);
}

$users = [
    ['name' => 'Tirion', 'birthday' => '1988-11-19'],
    ['name' => 'Sam', 'birthday' => '1999-11-22'],
    ['name' => 'Rob', 'birthday' => '1975-01-11'],
    ['name' => 'Sansa', 'birthday' => '2001-03-20'],
    ['name' => 'Tisha', 'birthday' => '1992-02-27']
];
 
takeOldest($users);