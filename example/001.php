<?php
use ApiClient\ApiService;
use JMS\Serializer\SerializerBuilder;
use ValueObject\Store\StoreManager;

require_once __DIR__ . '/../vendor/autoload.php';

$basePath = 'http://10.201.70.82:8088';

$apiService = new ApiService($basePath);
$serializer = SerializerBuilder::create()->build();

$ef = new ManagerFactory($apiService, $serializer);

/** @var StoreManager $store */
$store = $ef->create('Store');

var_dump($store->getStores(10));