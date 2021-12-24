<?php
defined("ENV") || define("ENV", "dev");
$baseConfig = include('base.php');

$commonConfig = array(
	'components' => [
		'cache' => [
            'host' => 'test.redis.demo.com',
            'port' => 6379,
            'keyPrefix' => 'demoDev.',
		],
        'demoDB'  => [
            'dsn' => 'mysql:host=192.168.100.2;port=3306;dbname=demo',
            'username' => 'demo',
            'password' => 'demo_+-*123',
        ],
        'queue' => [
            'credentials' => [
                'host' => 'test.rabbitmq.demo.com',
                'port' => '5672',
                'login' => 'mqadmin',
                'password' => 'demo_+-*123'
            ]
        ],
    ],
    'params' => [],
);

return [$baseConfig, $commonConfig];
