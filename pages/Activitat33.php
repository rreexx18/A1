<?php

// busca la primera letra que no se repite en el string

function find_non_repeat($word) {
    $chr = null;
    for ($n = 0; $n <= strlen($word); $n++) {
        if (substr_count($word, substr($word, $n, 1)) == 1) {
            $char = substr($word, $n, 1);
            return "La primera letra encontrada que no se repite es ".$char;
        }
    }
}

echo find_non_repeat("Green");
echo "<br><br>";
echo find_non_repeat("abcdea");

