<?php

namespace App\Models; 

use Illuminate\Database\Capsule\Manager as Capsule;
 
class Database {
    public function __construct() 
    {
        $capsule = new Capsule;
        $capsule->addConnection([
             'driver' => $_ENV['DB_ADAPTER'],
             'host' => $_ENV['DB_HOST'],
             'database' => $_ENV['DB_NAME'],
             'username' => $_ENV['DB_USER'],
             'password' => $_ENV['DB_PASS'],
             'charset' => 'utf8',
             'collation' => 'utf8_unicode_ci',
             'prefix' => ($_ENV['APP_ENVIRONMENT'] == 'development') ? 'dev_' : '',
        ]);
        // Setup the Eloquent ORM… 
        $capsule->bootEloquent();
    }
}