<?php

return
[
    'paths' => [
        'migrations' => '%%PHINX_CONFIG_DIR%%/db/migrations',
        'seeds' => '%%PHINX_CONFIG_DIR%%/db/seeds'
    ],
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_environment' => 'development',
        'production' => [
            'adapter' => 'mysql',
            'host' => 'mariadb',
            'name' => 'tasklist',
            'user' => 'root',
            'pass' => '',
            'port' => '3306',
            'charset' => 'utf8',
        ],
        'development' => [
            'adapter' => 'mysql',
            'host' => 'mariadb',
            'name' => 'tasklist',
            'user' => 'root',
            'pass' => '',
            'port' => '3306',
            'charset' => 'utf8',
            'table_prefix' => 'dev_'
        ],
        'testing' => [
            'adapter' => 'mysql',
            'host' => 'mariadb',
            'name' => 'tasklist',
            'user' => 'root',
            'pass' => '',
            'port' => '3306',
            'charset' => 'utf8',
            'table_prefix' => 'test_'
        ]
    ],
    'version_order' => 'creation'
];
