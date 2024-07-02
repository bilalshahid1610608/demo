<?php
// bootstrap.php

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;
use Symfony\Component\Cache\Adapter\ArrayAdapter;

require_once __DIR__ . "/vendor/autoload.php";

$config = require __DIR__ . '/config.php';

$paths = [__DIR__ . "/src/Entity"];
$isDevMode = true;

// Check if $config is an array and has the expected structure
if (!is_array($config) || !isset($config['database']) || !is_array($config['database'])) {
    throw new Exception('Invalid configuration structure');
}

$dbParams = [
    'driver'   => 'pdo_mysql',
    'host'     => $config['database']['host'] ?? 'localhost',
    'port'     => $config['database']['port'] ?? 3306,
    'dbname'   => $config['database']['dbname'] ?? 'your_default_db_name',
    'user'     => $config['database']['user'] ?? 'root',
    'password' => $config['database']['password'] ?? '',
    'charset'  => $config['database']['charset'] ?? 'utf8mb4',
];

$cache = new ArrayAdapter();

$ormConfig = ORMSetup::createAttributeMetadataConfiguration(
    $paths,
    $isDevMode,
    null,
    $cache
);

$connection = DriverManager::getConnection($dbParams, $ormConfig);
$entityManager = new EntityManager($connection, $ormConfig);

return $entityManager;