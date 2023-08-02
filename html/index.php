<?php

require_once 'vendor/autoload.php';

use App\Routing\Web as WebRouter;

$router = new WebRouter();
$router->add('/', 'App\Controllers\Controller@index');
$router->run();
