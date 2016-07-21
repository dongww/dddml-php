<?php
/**
 * User: dongww
 * Date: 2016/7/19
 * Time: 19:39
 */
namespace Entity\InOut\InOutLine;

use Dddml\StringIdInterface;
use JMS\Serializer\Annotation\Type;
use ValueObject\InOut\InOutLine\SkuId;

class InOutLineId implements StringIdInterface
{
    /**
     * @var InOutLineIdFlattenedDto
     */
    private $idFlattenedDto;

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
        if (!$this->idFlattenedDto) {
            $this->idFlattenedDto = new InOutLineIdFlattenedDto($this);
        }

        return $this->idFlattenedDto->toString();
    }

    /**
     * @param string $idStr
     *
     * @return InOutLineId
     */
    public static function createFromString($idStr)
    {
        return (new InOutLineIdFlattenedDto())
            ->fromString($idStr)
            ->toInOutLineId();
    }
}
