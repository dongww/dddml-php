<?php
/**
 * User: dongww
 * Date: 2016/5/18
 * Time: 19:53
 */

namespace ValueObject\Store;

use PhpGo\ApiService\AbstractManager;
use ValueObject\Store\Request\getStoresQuery;

/**
 * 门店类
 * @package Entity
 */
class StoreManager extends AbstractManager
{
    const REQUIRE_PATH = "/organizations";

    /**
     * 获取所有门店
     *
     * @param $size
     *
     * @return object
     */
    public function getStores($size)
    {
        $apiService = $this->apiService;

        $query = new getStoresQuery('Store', true, $size);

        $json = $apiService->request(
            static::REQUIRE_PATH,
            null,
            $query
        )->getBody();

        return $this->serializer->deserialize(
            $json,
            'ArrayCollection<ValueObject\Store\Store>',
            'json'
        );
    }
}