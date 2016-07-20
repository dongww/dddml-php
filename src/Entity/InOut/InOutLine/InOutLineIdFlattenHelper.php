<?php
namespace Entity\InOut\InOutLine;

use Dddml\AbstractIdFlattenHelper;

class InOutLineIdFlattenHelper extends AbstractIdFlattenHelper
{
    private static $setFunctions = [
        'setInOutDocumentNumber',
        'setSkuIdProductId',
        'setSkuIdAttributeSetInstanceId',
    ];

    private static $getFunctions = [
        'getInOutDocumentNumber',
        'getSkuIdProductId',
        'getSkuIdAttributeSetInstanceId',
    ];

    private static $idClassName =  'InOutLineId';

    /**
     * @return string
     */
    public function getInOutDocumentNumber()
    {
        return $this->value->getInOutDocumentNumber();
    }

    /**
     * @param string $inOutDocumentNumber
     */
    public function setInOutDocumentNumber($inOutDocumentNumber)
    {
        $this->value->setInOutDocumentNumber($inOutDocumentNumber);
    }

    /**
     * @return string
     */
    public function getSkuIdProductId()
    {
        return $this->value->getSkuId()->getProductId();
    }

    /**
     * @param string $skuIdProductId
     */
    public function setSkuIdProductId($skuIdProductId)
    {
        $this->value->getSkuId()->setProductId($skuIdProductId);
    }

    /**
     * @return string
     */
    public function getSkuIdAttributeSetInstanceId()
    {
        return $this->value->getSkuId()->getAttributeSetInstanceId();
    }

    /**
     * @param string $skuIdAttributeSetInstanceId
     */
    public function setSkuIdAttributeSetInstanceId($skuIdAttributeSetInstanceId)
    {
        $this->value->getSkuId()->setAttributeSetInstanceId($skuIdAttributeSetInstanceId);
    }
}
