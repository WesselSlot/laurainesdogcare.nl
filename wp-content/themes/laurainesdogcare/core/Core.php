<?php
require (TEMPLATEPATH.'/core/HttpHelper.php');

class Core
{
    public $httpHelper;

    public function __construct()
    {
        $this->httpHelper = new HttpHelper();
    }
}