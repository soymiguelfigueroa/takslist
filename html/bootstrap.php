<?php

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

require_once "vendor/autoload.php";

$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: array(__DIR__."/app"),
    isDevMode: true,
);

$connection = DriverManager::getConnection([
    'driver' => 'pdo_mysql',
    'user' => 'root',
    'password' => '',
    'host' => 'mariadb',
    'port' => '3306',
    'dbname' => 'takslist',
], $config);

$entityManager = new EntityManager($connection, $config);