<?php
/**
 * config.example.php
 * Copy this file to config.php and update values.
 */

return [
    'app' => [
        'name' => 'Coffee Shop Cashiering System',
        'env' => 'local',
        'debug' => true,
        'url' => 'http://localhost'
    ],

    'db' => [
        'connection' => 'mysql',
        'host' => '127.0.0.1',
        'port' => 3306,
        'database' => 'coffeeshop',
        'username' => 'root',
        'password' => ''
    ],

    'mail' => [
        'driver' => 'smtp',
        'host' => 'smtp.example.com',
        'port' => 587,
        'username' => null,
        'password' => null,
        'encryption' => null
    ]
];
