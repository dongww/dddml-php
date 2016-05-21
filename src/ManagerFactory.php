<?php
use PhpGo\ApiService\AbstractManager;
use PhpGo\ApiService\ApiService;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;

/**
 * User: dongww
 * Date: 2016/5/18
 * Time: 19:55
 */
class ManagerFactory
{
    private static $apiService;
    private static $serializer;

    public function __construct(ApiService $apiService, Serializer $serializer)
    {
        static::$apiService = $apiService;
        static::$serializer = $serializer;
    }

    public function create($name)
    {
        $className = "\\ValueObject\\{$name}\\{$name}Manager";

        $serializer = SerializerBuilder::create()->build();

        /** @var AbstractManager $manager */
        $manager = new $className;
        $manager->setApiService(static::$apiService);
        $manager->setSerializer(static::$serializer);

        return $manager;
    }
}