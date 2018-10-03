<?php

// busca si la suma de los numeros del array dan lo mismo que el numero que pilla la función

function pairs_search($nums, $pair_sum) {
    $nums_pairs = "";
    for ($n = 0; $n <= count($nums); $n++) {
        for ($p = $n + 1; $p < count($nums); $p++) {
            if ($nums[$n] + $nums[$p] == (int)$pair_sum) {
                $nums_pairs .= $nums[$n]." + ".$nums[$p]." = ".$pair_sum."<br>";
            }
        }
    }
    return $nums_pairs;
}

$nums = array(0,1,2,3,4,5,6);
echo pairs_search($nums, 7);
echo "<br>";
echo pairs_search($nums, 5);