<?php

function primeCheck($number){
    if ($number == 1 || $number == 0 || $number < 0)
        return 'no';
    for ($i = 2; $i <= $number/2; $i++){
        if ($number % $i == 0)
            return 'no';
    }
    return 'yes';
}


function sayPrimeOrNot($nb){
    return print_r(primeCheck($nb));
}


sayPrimeOrNot(0);