<?php

function getSuperSeriesWinner($scores){
    $sum = 0;
    foreach ($scores as $row){
        $sum = $sum + ($row[0] <=> $row[1]);
    }
    if ($sum > 0){
        return "canada";
    } elseif ($sum === 0) {
        return null;
    } else {
        return "ussr";
    }
}

$scores = [
    [3, 7], // Первая игра
    [4, 1], // Вторая игра
    [4, 4],
    [3, 5],
    [4, 5],
    [3, 2],
    [4, 3],
    [6, 7],
  ];
   
echo getSuperSeriesWinner($scores);