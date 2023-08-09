<?php

require './config.php';
require './vendor/autoload.php';

// initialize Illuminate database connection 
new App\Models\Database();

// Routes
$router = new App\Routing\Web();
$router->add('/', 'App\Controllers\HomeController@index');
$router->add('/test', 'App\Controllers\HomeController@index');
$router->run();
