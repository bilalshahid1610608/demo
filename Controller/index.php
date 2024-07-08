<?php
// Controller/index.php
require 'bootstrap.php';
require 'smartyHeader.php';
require_once "Entity/User.php";


$heading = 'List of Companies';

// Ensure $entityManager is passed to this file
/*global $entityManager;

if (!isset($entityManager)) {
    die('EntityManager not available');
}*/

$userRepository = $entityManager->getRepository(User::class);
$companiesEntities = $userRepository->findAll();

// Convert entities to arrays
$companies = array_map(function($company) {
    return [
        'id' => $company->getId(),
        'name' => $company->getName()
    ];
}, $companiesEntities);



$smarty = new CustomSmarty();
$smarty->assign('companies', $companies);
$smarty->assign('heading', $heading);
$smarty->display('indexview.tpl');