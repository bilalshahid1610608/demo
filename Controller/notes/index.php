<?php
require_once "bootstrap.php";
require 'smartyHeader.php';

$heading = 'List of Companies';

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