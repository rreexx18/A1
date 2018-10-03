<?php
// de una url separa la información, si es http/https, el host i la ruta
$url = 'http://ggarcia.cesnuria.com/A1/pages/Activitat8.php';
$url = parse_url($url);
echo 'Scheme : '.$url['scheme'];
echo '<br>';
echo 'Host : '.$url['host'];
echo '<br>';
echo 'Path : '.$url['path'];
