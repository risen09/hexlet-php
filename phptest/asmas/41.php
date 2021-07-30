<?php

function getDomainInfo($arr){
    $result = [];
    $res1 = explode('://',$arr);
    if (count($res1) === 1){
        $result['scheme'] = 'http';
        $result['name'] = $res1[0];
    } else {
        $result['scheme'] = $res1[0];
        $result['name'] = $res1[1];
    }
    return $result;
}

$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
$onlyconsonants = str_replace($vowels, "", "Hello World of PHP");

print_r($onlyconsonants); 
getDomainInfo('yandex.ru');
getDomainInfo('https://hexlet.io');