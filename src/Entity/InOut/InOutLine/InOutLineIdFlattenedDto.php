<?php
namespace Entity\InOut\InOutLine;

use Dddml\FlattenedDtoInterface;

class InOutLineIdFlattenedDto implements FlattenedDtoInterface
{
    const PROPERTIES = [
        'inOutDocumentNumber'         => 'string',
        'skuIdProductId'              => 'string',
        'skuIdAttributeSetInstanceId' => 'string',
    ];

    public static function getPropertyNames()
    {
        return array_keys(static::PROPERTIES);
    }

    public static function getPropertyTypes()
    {
        return array_values(static::PROPERTIES);
    }

    /**
     * @var InOutLineId
     */
    private $value;

    /**
     * @param InOutLineId $value
     */
    public function __construct(InOutLineId $value = null)
    {
        if ($value) {
            $this->value = $value;
        } else {
            $this->value = new InOutLineId();
        }
    }

    /**
     * @return InOutLineId
     */
    public function toInOutLineId()
    {
        return $this->value;
    }

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

    /**
     * @return string
     */
    public function toString()
    {
        $pValues = [
            $this->getInOutDocumentNumber(),
            $this->getSkuIdProductId(),
            $this->getSkuIdAttributeSetInstanceId(),
        ];

        return implode(',', $pValues);
    }

    /**
     * @param string $data
     *
     * @return InOutLineIdFlattenedDto
     */
    public function fromString($data)
    {
        $pValues = explode(',', $data);
        $this->setInOutDocumentNumber($pValues[0]);
        $this->setSkuIdProductId($pValues[1]);
        $this->setSkuIdAttributeSetInstanceId($pValues[2]);

        return $this;
    }
}
