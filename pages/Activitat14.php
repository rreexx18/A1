<?php

// cuenta el numero de lineas del fichero que escojas

$file = "index.php"; 
$num_lines = count(file($file)); 
echo "Hay $num_lines linias en $file"."\n";
