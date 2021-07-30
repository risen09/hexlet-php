<?php

function enlargeArrayImage($arr){
    $result = [];
    $result2 = [];
    foreach ($arr as $item){
        $result[] = $item;
        $result[] = $item;
    }
    foreach ($result as $elem1){
        $res1 = [];
        foreach ($elem1 as $elem2){
            $res1[] = $elem2;
            $res1[] = $elem2;
        }
        $result2 [] = $res1;
    }

    print_r($result2);
}
// function duplicateEach(array $items)
// {
//     return Collection\flatten(
//         array_map(fn($item) => [$item, $item], $items)
//     );
// }

// function enlargeArrayImage($matrix)
// {
//     $horizontallyStretched = array_map(fn($col) => duplicateEach($col), $matrix);
//     return duplicateEach($horizontallyStretched);
// }

$image = [
    ['*','*','*','*'],
    ['*',' ',' ','*'],
    ['*',' ',' ','*'],
    ['*','*','*','*']
  ];
  // ****
  // *  *
  // *  *
  // ****
   
  enlargeArrayImage($image);
  // ********
  // ********
  // **    **
  // **    **
  // **    **
  // **    **
  // ********
  // ********
  