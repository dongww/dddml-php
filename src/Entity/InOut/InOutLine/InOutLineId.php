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
     * @var InOutLineIdFlattenHelper
     */
    private $idFlattenedHelper;

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
        if (!$this->skuId) {
            $this->skuId = new SkuId();
        }

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
        if (!$this->idFlattenedHelper) {
            $this->idFlattenedHelper = new InOutLineIdFlattenHelper($this);
        }

        return $this->idFlattenedHelper->toString();
    }

    /**
     * @param string $idStr
     *
     * @return InOutLineId
     */
    public static function createFromString($idStr)
    {
        return (new InOutLineIdFlattenHelper())
            ->stringToInOutLineId($idStr);
    }
}
