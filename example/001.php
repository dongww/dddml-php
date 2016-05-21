<?php
use ValueObject\Store\StoreManager;

require_once __DIR__ . '/../vendor/autoload.php';

/** @var ManagerFactory  $ef */
$ef = require __DIR__ . '/bootstrap.php';

//以下调用过程

/** @var StoreManager $storeManager */
$storeManager = $ef->create('Store');

//var_export($store->getStores(10));
$stores = $storeManager->getStores(10);

var_dump($stores[0]);