<?php

function makeCensored($arr, $prov){
    $newarr = explode(' ', $arr);
    $resarr = [];
    foreach ($newarr as $word){
        foreach ($prov as $word2){
            if ($word === $word2){
                $word = "$#%!";
            }
        }
        $resarr[] = $word;
    }
    $result = implode(" ", $resarr);
    return $result;
}

$sentence = 'When you play the game of thrones, you win or you die';
print_r(makeCensored($sentence, ['die', 'play']));
$sentence2 = 'chicken chicken? chicken! chicken';
print_r(makeCensored($sentence2, ['?', 'chicken']));