<?php
/**
 * User: dongww
 * Date: 2016/5/19
 * Time: 19:41
 */

namespace ValueObject\Store\ResponseBody;

use JMS\Serializer\Annotation\Type;

class StoreCollection
{
    /**
     * @Type("array<ValueObject\Store\ResponseBody\Store>")
     * @var  Store[]
     */
    private $stores = [];

    /**
     * @return Store[]
     */
    public function getStores()
    {
        return $this->stores;
    }

    /**
     * @param Store[] $stores
     */
    public function setStores(array $stores)
    {
        $this->stores = $stores;
    }

    public function add(Store $store)
    {
        $this->stores[] = $store;
    }
}