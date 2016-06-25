<?php
namespace PhpGo\ApiService;

use JMS\Serializer\SerializerBuilder;

/**
 * User: dongww
 * Date: 2016/5/18
 * Time: 19:55
 */
class ManagerFactory
{
    private static $apiService;

    public function __construct(ApiService $apiService)
    {
        static::$apiService = $apiService;
    }

    public function create($name)
    {
        $className = "\\Entity\\{$name}\\{$name}Manager";

        $serializer = SerializerBuilder::create()->build();

        /** @var AbstractManager $manager */
        $manager = new $className;
        $manager->setApiService(static::$apiService);

        return $manager;
    }
}
