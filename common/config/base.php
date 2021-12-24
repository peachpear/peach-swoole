<?php
defined("APP_NAME") || define("APP_NAME", "demo");
defined('VERSION') or define('VERSION', '*');

return array(
    'aliases' => [
        '@common' => realpath(__DIR__."/../"),
    ],
    'bootstrap' => ['log'],
	'components' => [
		'cache' => [
			'class' => 'common\components\LRedisCache',
			'hashKey' => false,
		],
        'demoDB' => [
            'class' => '\yii\db\Connection',
            'charset' => 'utf8mb4',
            'enableQueryCache' => false,
        ],
		'curl'=> [
			'class' => 'common\components\LComponentCurl',
		],
        'queue' => [
            "class" =>  'common\components\LRabbitQueue'
        ],
        'log' => [
            'flushInterval' => 1,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ]
	]
);