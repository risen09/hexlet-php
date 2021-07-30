<?php

const FREE_EMAIL_DOMAINS = [
    'gmail.com', 'yandex.ru', 'hotmail.com'
];

function razd($str1){
    $res1 = strpos($str1, "@");
    $res2 = substr($str1, $res1+1);
    return $res2;
}

function getFreeDomainsCount($arr){
    $filterres = array_filter($arr, fn($item) => (in_array(razd($item), FREE_EMAIL_DOMAINS)));
    return array_reduce($filterres, function ($acc, $email){
        if (!array_key_exists(razd($email), $acc)){
            $acc[razd($email)] = 1;
        } else {
            $acc[razd($email)] += 1;
        }
        return $acc;
    }, []);
}

$emails = [
    'info@gmail.com',
    'info@yandex.ru',
    'info@hotmail.com',
    'mk@host.com',
    'support@hexlet.io',
    'key@yandex.ru',
    'sergey@gmail.com',
    'vovan@gmail.com',
    'vovan@hotmail.com'
];
 
print_r(getFreeDomainsCount($emails));