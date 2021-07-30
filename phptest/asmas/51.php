<?php

$user = ['name' => 'Vasya', 'married' => true, 'age' => 25];

if (array_key_exists('name', $user)) {
    print_r('yeah!');
} else {
    print_r('no');
}

function countFruits($fruits)
{
  $result = [];

  foreach ($fruits as $name) {
    // Проверка на существование
    if (array_key_exists($name, $result)) {
      $result[$name] += 1;
    } else {
      $result[$name] = 1;
    }
  }

  return $result;
}