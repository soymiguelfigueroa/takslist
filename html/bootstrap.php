<?php

require './vendor/autoload.php';

// Routes
$router = new App\Routing\Web();
$router->add('/', 'App\Controllers\HomeController@index');
$router->add('/test', 'App\Controllers\HomeController@index');
$router->run();
