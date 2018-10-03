<?php

$temp_file = tempnam(sys_get_temp_dir(), 'Tux');
echo $temp_file;
echo "<br><br>";
echo "Es algo como esto ==> "
. "(variable)temp_file = tempnam(sys_get_temp_dir(), 'Tux');<br>"
. "I luego un echo de la variable pero no me funciona.";

