<?php
require 'vendor/autoload.php';
use MaxMind\Db\Reader;

// Testing to see if the IP address was passed through
$ip = (isset($_GET['ip'])) ? $_GET['ip'] : die('NO IP GIVEN');

// By default we will use the Country Database, but the type can be set using the type query parameter.
$type = (isset($_GET['type']) && $_GET['type'] === 'city') ? 'City' : 'Country';

$path = sprintf('./db/GeoLite2-%s.mmdb', $type);

echo sprintf("<b>TESTING IP</b>: %s", $ip);
$reader = new Reader($path);
$res = $reader->get($ip);

echo '<pre>';
print_r($res);
echo '</pre>';
