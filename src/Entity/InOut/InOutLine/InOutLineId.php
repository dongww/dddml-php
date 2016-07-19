<?php
/**
 * User: dongww
 * Date: 2016/7/19
 * Time: 19:39
 */
namespace Entity\InOut\InOutLine;

use Dddml\IdFlattenedEnable;
use JMS\Serializer\Annotation\Type;
use ValueObject\InOut\InOutLine\SkuId;

class InOutLineId implements IdFlattenedEnable
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

    public function serialize()
    {
        // TODO: Implement serialize() method.
    }

    public function unserialize($serialized)
    {
        // TODO: Implement unserialize() method.
    }
}
