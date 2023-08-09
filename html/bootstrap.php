<?php

require './vendor/autoload.php';

// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();

// Routes
$router = new App\Routing\Web();
$router->add('/', 'App\Controllers\HomeController@index');
$router->add('/test', 'App\Controllers\HomeController@index');
$router->run();
