<?php
defined("ENV") || define("ENV", "pre");
$baseConfig = include('base.php');

$commonConfig = array(
    'components' => [
        'cache' => [
            'host' => '',
            'port' => 6379,
            'keyPrefix' => '',
        ],
        'demoDB'  => [
            'dsn' => '',
            'username' => '',
            'password' => '',
        ],
    ],
    'params' => [],
);

return [$baseConfig, $commonConfig];
