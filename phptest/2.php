<?php

$cities = ['moscow', 'london', 'porto'];

// for ($i = 0; $i <= count($cities) - 1; $i += 1){
//     unset($cities[$i]);
// }
while (count($cities)){
    unset($cities[count($cities) - 1]);
    if (count($cities) == 0) {
        break;
    }
}
unset($cities[$index])
$cities[$index] = $value;
print_r($cities);