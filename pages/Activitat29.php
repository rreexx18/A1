<?php

// busca los numeros primos dentro de los 100 primero numeros i los suma

$primes = array();
$prime = false;
for ($n = 2; $n<100; $n++) {
    $prime = true; 
        for ($p = 2; $p<=($n/2); $p++) {
            if ($n%$p==0) {
                $prime = false;
                break;
            }
        }
        if ($prime) {
            array_push($primes,$n);
        }
        if (count($primes)==100) {
            break;
        }
}
echo array_sum($primes);

