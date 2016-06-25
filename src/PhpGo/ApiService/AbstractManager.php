<?php
/**
 * User: dongww
 * Date: 2016/5/18
 * Time: 20:01
 */
namespace PhpGo\ApiService;

use JMS\Serializer\Serializer;

class AbstractManager
{
    /**
     * @var ApiService
     */
    protected $apiService;

    /** @var  Serializer */
    protected $serializer;

    public function setApiService(ApiService $apiService)
    {
        $this->apiService = $apiService;
    }

    public function setSerializer(Serializer $serializer)
    {
        $this->serializer = $serializer;
    }
}
