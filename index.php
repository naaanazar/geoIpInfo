<?php
/**
 * Created by PhpStorm.
 * User: naaanazar
 * Date: 17.05.2017
 * Time: 13:50
 */


/**
 * use
 *geoip service
 **/

require ('src\freegeoip\FreeGeoIp.php');

$freeGeoIp = new FreeGeoIp();
var_dump($freeGeoIp->getIp());

// maxmind
require_once 'vendor/autoload.php';
use GeoIp2\Database\Reader;


// This creates the Reader object, which should be reused across
// lookups.
$reader = new Reader('GeoIP2-ISP.mmdb');

$record = $reader->isp('8.8.8.8');

print($record->autonomousSystemNumber . "\n");
print($record->autonomousSystemOrganization . "\n"); // 'University of Minnesota'
print($record->isp . "\n"); // 'University of Minnesota'
//print($record->organization . "\n"); // 'University of Minnesota'

print($record->ipAddress . "\n"); // '128.101.101.101'