<?php
require (TEMPLATEPATH.'/core/HttpHelper.php');

class Core
{
    public $httpHelper;
    private $validIpAddresses = ['143.176.7.49', '86.93.145.185'];

    public function __construct()
    {
        $this->httpHelper = new HttpHelper();
    }

    public function validateIpAddress() {
        return in_array($this->getIpAddress(), $this->validIpAddresses);
    }

    private function getIpAddress() {
        if(!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }

        return $ip;
    }
}