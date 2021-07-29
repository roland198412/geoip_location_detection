<?php
// Raising this value may increase performance
$buffer_size = 4096; // read 4kb at a time

// Open our files (in binary mode)
$inflatedDB = gzopen('./db/GeoLite2-Country.mmdb.gz', 'rb');
if ($inflatedDB === false) {
	echo 'error';
}

// Creating new file for writing
$newDBFile = './db/GeoLite2-Country.mmdb';
$destinationFile = fopen($newDBFile, 'wb');
if ($inflatedDB === false) {
	echo 'error';
}

// Keep repeating until the end of the input file
while (!gzeof($inflatedDB)) {
	// Read buffer-size bytes
	// Both fwrite and gzread and binary-safe
	fwrite($destinationFile, gzread($inflatedDB, $buffer_size));
}

// Files are done, close files
fclose($destinationFile);
gzclose($inflatedDB);
