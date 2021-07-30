<?php

function buildDefinitionList($arr){
    if (empty($arr)){
        return '';
    }
    $resarr = "<dl>";
    foreach($arr as $item){
        $resarr = "{$resarr}<dt>{$item[0]}</dt>";
        $resarr = "{$resarr}<dd>{$item[1]}</dd>";
    }
    $resarr = "{$resarr}</dl>";
    return $resarr;
}

$definitions = [
    ['Блямба', 'Выпуклость, утолщения на поверхности чего-либо'],
    ['Бобр', 'Животное из отряда грызунов'],
];
 
print_r(buildDefinitionList($definitions));