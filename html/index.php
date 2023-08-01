<?php

require_once 'vendor/autoload.php';

use Soymiguelfigueroa\Taskslist\Routing\Web as WebRouter;

$router = new WebRouter();
$router->add('/', function () {
    echo 'Hello Router!';
});
$router->run();
