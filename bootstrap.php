<?php
// bootstrap.php

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;
use Doctrine\ORM\Tools\Setup;
use Symfony\Component\Cache\Adapter\ArrayAdapter;

require_once __DIR__ . "/vendor/autoload.php";


$paths = array(__DIR__."/Entity");
$isDevMode = false;


$dbParams = array(
    'driver'   => 'pdo_mysql',
    'host'     => 'localhost',
    'port'     => 3306,
    'dbname'   => 'Demo',
    'user'     => 'root',
    'password' => '',
);


$ormConfig = ORMSetup::createAttributeMetadataConfiguration(
    $paths,
    $isDevMode,
);
$connection = DriverManager::getConnection($dbParams, $ormConfig);
$entityManager = new EntityManager($connection, $ormConfig);

