<?php
// bootstrap.php

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;
// require_once "User.php";
// use Doctrine\ORM\Tools\Setup;
// use Symfony\Component\Cache\Adapter\ArrayAdapter;
require_once __DIR__ . "/vendor/autoload.php";

// $paths = array(__DIR__."/Entity");
// // echo($paths[0]);
// // exit();
// $isDevMode = true;


// $dbParams = array(
//     'driver'   => 'pdo_mysql',
//     'host'     => 'localhost',
//     'port'     => 3306,
//     'dbname'   => 'Demo',
//     'user'     => 'root',
//     'password' => '',
// );


$ormConfig = ORMSetup::createAttributeMetadataConfiguration(
    paths: array(__DIR__),
    isDevMode:true,
);
$connection = DriverManager::getConnection([
'driver'   => 'pdo_mysql',
'host'     => 'localhost',
'port'     => 3306,
'dbname'   => 'Demo',
'user'     => 'root',
'password' => ''], $ormConfig);

$entityManager = new EntityManager($connection, $ormConfig);


require_once "User.php";
$UserRepository = $entityManager->getRepository(User::class);
$Users = $UserRepository->findAll();
var_dump($Users);