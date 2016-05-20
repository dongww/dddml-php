<?php
use ApiClient\ApiService;
use Doctrine\Common\Annotations\AnnotationRegistry;
use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\SerializerBuilder;
use ValueObject\Store\StoreManager;

require_once __DIR__ . '/../vendor/autoload.php';
//以下是配置和初始化过程
$basePath = 'http://10.201.70.82:8088';

$apiService = new ApiService($basePath);
AnnotationRegistry::registerAutoloadNamespace(
    'JMS\Serializer\Annotation',
    __DIR__ . "/../vendor/jms/serializer/src");

$cs = new CamelCaseNamingStrategy('', false);
$snas = new SerializedNameAnnotationStrategy($cs);

$serializer = SerializerBuilder::create()
    ->setPropertyNamingStrategy($snas)
    ->build();

$ef = new ManagerFactory($apiService, $serializer);

//以下调用过程

/** @var StoreManager $store */
$store = $ef->create('Store');

//var_export($store->getStores(10));
$stores = $store->getStores(10);

var_dump($stores[0]);