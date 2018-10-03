<?php

// pilla la ultima modificación del fichero que escojas

$file_name = "index.php";
$last_modified = filemtime($file_name); 
echo "Ultima modificación " . date("l, dS F, Y, h:ia", $last_modified)."\n";
