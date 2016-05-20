<?php
/**
 * User: dongww
 * Date: 2016/5/18
 * Time: 19:53
 */

namespace ValueObject\Store;

use ApiClient\AbstractEntity;
use ValueObject\Store\AllQuery;

/**
 * 门店类
 * @package Entity
 */
class StoreManager extends AbstractEntity
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

        $query = new AllQuery('Store', true, $size);

        $json = $apiService->request(
            static::REQUIRE_PATH,
            null,
            $query
        )->getBody();

//        return $json;
        return $this->serializer->deserialize($json, 'ArrayCollection<ValueObject\Store\ResponseBody\Store>', 'json');
    }
}