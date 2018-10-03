<?php

// forma muy comoda i util de intercambiar dos variables sin usar una tercera variable
// no la conocia i me ha sorprendido

$x = "variable 1";
$y = "variable 2";
echo "Antes de cambiar: ".$x.','.$y;
echo "<br><br>";
list($x, $y) = array($y, $x);
echo "Despues de cambiar: ".$x.','.$y;