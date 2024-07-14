<?php
// bootstrap.php
use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

require_once "vendor/autoload.php";

// Create a simple "default" Doctrine ORM configuration for Attributes
$config = ORMSetup::createAttributeMetadataConfiguration(
    paths: array(__DIR__."/src"),
    isDevMode: true,
);
// or if you prefer XML
// $config = ORMSetup::createXMLMetadataConfiguration(
//    paths: array(__DIR__."/config/xml"),
//    isDevMode: true,
//);

// configuring the database connection
$connection = DriverManager::getConnection([
'driver'   => 'pdo_mysql',
'host'     => 'localhost',
'port'     => 3306,
'dbname'   => 'Demo',
'user'     => 'root',
'password' => ''
], $config);

// obtaining the entity manager
$entityManager = new EntityManager($connection, $config);

// var_dump(new User());
// // if (class_exists(User::class)) {
// //     echo 'Class User found!';
// // } else {
// //     echo 'Class User not found!';
// }
$UserRepository = $entityManager->getRepository('User');
$Users = $UserRepository->findAll();
var_dump($Users);



