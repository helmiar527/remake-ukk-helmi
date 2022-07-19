<?php
$protocol = 'http://';
$host = ($_SERVER["HTTP_HOST"]);
$path = '/ukk-helmi';
define('BASEURL', $protocol . $host . $path);
define('USERURL', $protocol . $host . $path . '/public');

// Opsi
// jaringan local
// HTTP_HOST
// jaringan internet
// HTTP_REFERER