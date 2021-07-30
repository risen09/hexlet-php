<?php

function normalize(&$lesson){
    $res1 = mb_strtolower($lesson["name"]);
    $res3 = mb_strtoupper($lesson["name"], 'utf-8');
    $res2 = mb_substr($res1, 1);
    $res4 = mb_substr($res3, 0, 1);
    $lesson["name"] = "{$res4}{$res2}";
    $lesson["description"] = mb_strtolower($lesson["description"]);
    return $lesson;

}

$lesson = [
    'name' => 'ДеструКТУРИЗАЦИЯ',
    'description' => 'каК удивитЬ колек',
];

normalize($lesson);

print_r($lesson);