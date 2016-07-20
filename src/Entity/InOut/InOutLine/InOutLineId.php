<?php
/**
 * User: dongww
 * Date: 2016/7/19
 * Time: 19:39
 */
namespace Entity\InOut\InOutLine;

use Dddml\IdFlattenEnable;
use JMS\Serializer\Annotation\Type;
use ValueObject\InOut\InOutLine\SkuId;

class InOutLineId implements IdFlattenEnable
{
    /**
     * @Type("string")
     *
     * @var string
     */
    private $inOutDocumentNumber;

    /**
     * @Type("array<ValueObject\InOut\InOutLine\SkuId>")
     * @var  SkuId
     */
    private $skuId;

    /**
     * @return string
     */
    public function getInOutDocumentNumber()
    {
        return $this->inOutDocumentNumber;
    }

    /**
     * @param string $inOutDocumentNumber
     */
    public function setInOutDocumentNumber($inOutDocumentNumber)
    {
        $this->inOutDocumentNumber = $inOutDocumentNumber;
    }

    /**
     * @return SkuId
     */
    public function getSkuId()
    {
        return $this->skuId;
    }

    /**
     * @param SkuId $skuId
     */
    public function setSkuId($skuId)
    {
        $this->skuId = $skuId;
    }

    /**
     * @return string
     */
    public function toString()
    {
        $values = [
            $this->getInOutDocumentNumber(),
            $this->getSkuId()->getProductId(),
            $this->getSkuId()->getAttributeSetInstanceId(),
        ];

        return implode(',', $values);
    }

    /**
     * @param string $idStr
     *
     * @return InOutLineId
     */
    public static function createFromString($idStr)
    {
        $values = explode(',', $idStr);

        $inOutLineId = new static();
        $inOutLineId->setInOutDocumentNumber($values[0]);

        $skuId = new SkuId();
        $skuId->setProductId($values[1]);
        $skuId->setAttributeSetInstanceId($values[2]);
        $inOutLineId->setSkuId($skuId);

        return $inOutLineId;
    }
}
