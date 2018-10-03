<?php
// para saber si una pagina es http o https
$url = 'http://ggarcia.cesnuria.com';
$url = parse_url($url);
echo 'Scheme : '.$url['scheme'];
