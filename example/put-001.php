<?php
use Entity\User\UserManager;
use PhpGo\ApiService\ManagerFactory;
use PhpGo\ApiService\Exception;

require_once __DIR__ . '/../vendor/autoload.php';

/** @var ManagerFactory $ef */
$ef = require __DIR__ . '/bootstrap.php';

/** @var UserManager $userManager */
$userManager = $ef->create('User');

$user = $userManager->login(
    '15658202878',
    '555555'
);

var_dump($user);