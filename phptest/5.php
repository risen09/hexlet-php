<?php

$colors = ['red', 'black', 'white', 'green'];

for ($i = 0, $length = count($colors); $i < $length; print($i), $i++) {
  print_r("{$colors[$i]}\n");
}

for ($i = 0; $i < 5; print("$i\n"), $i++) {
    // some code
  }