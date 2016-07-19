<?php
/**
 * User: dongww
 * Date: 2016/7/19
 * Time: 16:21
 */
namespace ValueObject\InOut\InOutLine;

use JMS\Serializer\Annotation\Type;

class SkuId
{
    /**
     * @Type("string")
     *
     * @var string
     */
    private $productId;

    /**
     * @Type("string")
     *
     * @var string
     */
    private $attributeSetInstanceId;

    /**
     * @return string
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param string $productId
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }

    /**
     * @return string
     */
    public function getAttributeSetInstanceId()
    {
        return $this->attributeSetInstanceId;
    }

    /**
     * @param string $attributeSetInstanceId
     */
    public function setAttributeSetInstanceId($attributeSetInstanceId)
    {
        $this->attributeSetInstanceId = $attributeSetInstanceId;
    }
}
