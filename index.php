<?php
require 'vendor/autoload.php';
use MaxMind\Db\Reader;
$reader = new Reader('./db/GeoLite2-City.mmdb');
$res = $reader->get('47.187.45.49');
print_r($res);

// Krugers Dorp = SA = 165.49.8.75
// Texas IP
