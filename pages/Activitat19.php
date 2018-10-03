<?php

// pilla el host i ruta del server

$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

echo $url;
echo "<br>";