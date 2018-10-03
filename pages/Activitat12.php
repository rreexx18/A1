<?php

// pilla el codigo fuente de la pagina i te lo imprime linea a linea contandolas

$url ="https://www.w3schools.com/php/";
$source = file($url);
echo "<h1>Url: ".$url."</h1>";
foreach ($source as $num => $line)
 {
 	echo "Line No.-{$num}: " . htmlspecialchars($line) . "\n";
 }
