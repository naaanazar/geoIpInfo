<?php
/**
 * Created by PhpStorm.
 * User: naaanazar
 * Date: 17.05.2017
 * Time: 13:50
 */

/**
 * git ip geo infi use api https://freegeoip.net
 * Class FreeGeoIp
 */
class FreeGeoIp
{

    /**
     * return info about ip in array
     * @return mixed
     */
    public function getRemoteAddr()
    {
        $ip = $_SERVER['REMOTE_ADDR'];

        return $ip;
    }

    /**
     * @return mixed
     */
    public function getGeoIpInfo()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $data = file_get_contents("http://freegeoip.net/json/github.com");
        $geo_info = json_decode($data);

        return $geo_info;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return  $this->getGeoIpInfo()->country_name;
    }

    /**
     * @return mixed
     */
    public function getRegionName()
    {
        return  $this->getGeoIpInfo()->region_name;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return  $this->getGeoIpInfo()->city;
    }

    /**
     * @return mixed
     */
    public function getIp()
    {
        return  $this->getGeoIpInfo()->ip;
    }

    /**
     * @return mixed
     */
    public function getZipCode()
    {
        return  $this->getGeoIpInfo()->zip_code;
    }

}