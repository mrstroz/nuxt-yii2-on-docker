<?php

use app\components\rabbitmq\consumers\CrawlerConsumer;
use app\modules\app\AppModule;
use app\modules\crawler\CrawlerModule;
use mikemadisonweb\rabbitmq\Configuration;

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'modules' => [
        'app' => [
            'class' => AppModule::class
        ],
        'crawler' => [
            'class' => CrawlerModule::class
        ],
    ],
    'components' => [
        'db' => $db,
        'rabbitmq' => [
            'class' => Configuration::class,
            'connections' => [
                [
                    // You can pass these parameters as a single `url` option: https://www.rabbitmq.com/uri-spec.html
                    'host' => 'rabbitmq',
                    'port' => '5672',
                    'user' => 'guest',
                    'password' => 'guest',
                    'vhost' => '/',
                ]
                // When multiple connections is used you need to specify a `name` option for each one and define them in producer and consumer configuration blocks
            ],
            'exchanges' => [
                [
                    'name' => 'CrawlerExchange',
                    'type' => 'direct'
                    // Refer to Defaults section for all possible options
                ],
            ],
            'queues' => [
                [
                    'name' => 'CrawlerQueue',
                    // Queue can be configured here the way you want it:
                    'durable' => true,
                    //'auto_delete' => false,
                ]
            ],
            'bindings' => [
                [
                    'queue' => 'CrawlerQueue',
                    'exchange' => 'CrawlerExchange',
                    'routing_keys' => ['CrawlerKey'],
                ],
            ],
            'producers' => [
                [
                    'name' => 'CrawlerProducer',
                ],
            ],
            'consumers' => [
                [
                    'name' => 'CrawlerConsumer',
                    // Every consumer should define one or more callbacks for corresponding queues
                    'callbacks' => [
                        // queue name => callback class name
                        'CrawlerQueue' => CrawlerConsumer::class,
                    ],
                ],
            ],
        ],
    ],
    'params' => $params,

];

return $config;