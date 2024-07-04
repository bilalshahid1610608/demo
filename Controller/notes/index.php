<?php

use Doctrine\ORM\Mapping\Entity;

require_once "bootstrap.php";
require 'smartyHeader.php';
require_once "Entity/User.php";

$heading = 'List of Companies';


$userRepository = $entityManager->getRepository('User');
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