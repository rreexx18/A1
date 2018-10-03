<?php

// funcion para ver si un numero es armstrong o no

function armstrong_number($num) {
  $lenght = strlen($num);
  $sum = 0;
  $num = (string)$num;
  for ($x = 0; $x < $lenght; $x++) {
    $sum = $sum + pow((string)$num{$x},$lenght);
  }
  if ((string)$sum == (string)$num) {
    return true;
  } else {
    return false;
  }
}
$result = armstrong_number(143);
if($result == true){
    echo "Es un numero armstrong.";
}else{
    echo "No es un numero armstrong.";
}