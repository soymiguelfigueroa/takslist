<?php

require_once 'vendor/autoload.php';

use App\Routing\Web as WebRouter;

$router = new WebRouter();
$router->add('/', 'App\Controllers\HomeController@index');
$router->add('/test', 'App\Controllers\HomeController@index');
$router->run();
