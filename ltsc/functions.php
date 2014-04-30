<?php
#error_reporting(E_ALL);
#include __DIR__ . '/../_shared/geoip/index.php';
#use GeoIp2\Database\Reader;

function geoLocate() {
	$geoDbPath = __DIR__ . '/../_shared/geoip/GeoLite2City.mmdb';

	// This creates the Reader object, which should be reused across
	// lookups.
	// 
	echo '<br/>';
	$reader = new Reader($geoDbPath);

	// Replace "city" with the appropriate method for your database, e.g.,
	// "country".
	$record = $reader->city('128.101.101.101');

	print($record->country->isoCode . "\n"); // 'US'
	print($record->country->name . "\n"); // 'United States'
	print($record->country->names['zh-CN'] . "\n"); // 

}

?>