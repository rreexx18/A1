<?php

// busca la segunda string dentro de la primera pero en ultima posición

function str2_in_str1($str1, $str2) {
    $len2 = strlen($str2);
    $len1 = strlen($str1);
    if (substr($str1, $len1-$len2, $len2) == $str2) {
        return true;
    }else{
        return false;
    }
}
if ( str2_in_str1("Python","on") == true ){
    echo "La cadena coincide.";
}else{
    echo "La cadena no coincide.";
}

echo "<br><br>";

if ( str2_in_str1("JavaScript","php") == true ){
    echo "La cadena coincide.";
}else{
    echo "La cadena no coincide.";
}