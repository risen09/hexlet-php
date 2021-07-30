<?php

$animals = ['cats', 'dog', 'birgs'];

echo $animals[0];
echo "\n";
echo count($animals);
echo "\n";
$animals[] = 'hores';

print_r($animals);
unset($animals[1]);
print_r($animals);