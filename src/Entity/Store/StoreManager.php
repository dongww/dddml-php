<?php
/**
 * User: dongww
 * Date: 2016/5/18
 * Time: 19:53
 */
namespace Entity\Store;

use Entity\Store\Request\getStoresQueries;
use PhpGo\ApiService\AbstractManager;
use PhpGo\ApiService\Response;

/**
 * 门店类
 * @package Entity
 */
class StoreManager extends AbstractManager
{
    const REQUIRE_PATH = '/organizations';

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

        $query = new getStoresQueries('Store', true, $size);

        return $apiService->request(
            static::REQUIRE_PATH,
            null,
            $query
        )->getObject(
            'array<Entity\Store\Store>'
        );
    }
}
