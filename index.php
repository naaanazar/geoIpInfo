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