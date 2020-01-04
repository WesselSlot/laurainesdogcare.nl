<?php
require_once dirname( dirname( dirname( dirname( __FILE__ ) ) ) ) . '/public/wp-config.php';

class Security
{
    public function validateApiKey($apiKey) {
        if ($apiKey !== API_KEY) {
            throw new Exception("Your API key is not valid");
        }

        return true;
    }
}