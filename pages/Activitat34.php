<?php

// multiplica 2 arrays diferentes

function multiply_two_lists($x, $y)
  {
    $a = explode(' ',trim($x));
    $b = explode(' ',trim($y));
    foreach($a as $key => $value){
        $output[$key] = $a[$key] * $b[$key];
    }
    return implode(' ',$output);
}
echo multiply_two_lists(("2 3 4"), ("5 6 7"));

