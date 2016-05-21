<?php
use PhpGo\ApiService\ApiService;
use Doctrine\Common\Annotations\AnnotationRegistry;
use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\SerializerBuilder;

$basePath = 'http://10.201.70.82:8088';

$apiService = new ApiService($basePath);
AnnotationRegistry::registerAutoloadNamespace(
    'JMS\Serializer\Annotation',
    __DIR__ . "/../vendor/jms/serializer/src");

$cs = new CamelCaseNamingStrategy('', false, false);
$snas = new SerializedNameAnnotationStrategy($cs);

$serializer = SerializerBuilder::create()
    ->setPropertyNamingStrategy($snas)
    ->build();

return new ManagerFactory($apiService, $serializer);