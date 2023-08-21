<?php

require_once './bootstrap.php';

if (!function_exists('debug')) {
    function debug($expression) {
        echo '<pre>';
        var_dump($expression);
        echo '</pre>';
    }
}

if (!function_exists('dd')) {
    function dd($expression) {
        debug($expression);
        exit;
    }
}

// initialize Illuminate database connection
new App\Models\Database();

// Routes
$router = new App\Routing\Web();
$router->add('/', 'App\Controllers\HomeController@index');
$router->add('/create', 'App\Controllers\HomeController@create');
$router->add('/store', 'App\Controllers\HomeController@store');
$router->add('/edit', 'App\Controllers\HomeController@edit');
$router->add('/update', 'App\Controllers\HomeController@update');
$router->run();
