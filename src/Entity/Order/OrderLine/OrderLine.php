<?php
/**
 * User: dongww
 * Date: 2016/6/6
 * Time: 19:00
 */

namespace Entity\Order\OrderLine;

use JMS\Serializer\Annotation\Type;

class OrderLine
{
    /**
     * @Type("string")
     */
    private $Id;

    /**
     * @Type("string")
     */
    private $ProductId;

    /**
     * @Type("string")
     */
    private $PoProductNo;

    /**
     * @Type("string")
     */
    private $ProductName;

    /**
     * @Type("string")
     */
    private $AttributeSetInstanceId;

    /**
     * @Type("string")
     */
    private $SkuName;

    /**
     * @Type("double")
     */
    private $Quantity;

    /**
     * @Type("string")
     */
    private $QuantityUomId;

    /**
     * @Type("double")
     */
    private $ListPrice;

    /**
     * @Type("string")
     */
    private $ListPriceUomId;

    /**
     * @Type("double")
     */
    private $ActualPrice;

    /**
     * @Type("string")
     */
    private $ActualPriceUomId;

    /**
     * @Type("string")
     */
    private $OrganizationId;

    /**
     * @Type("string")
     */
    private $OrganizationName;

    /**
     * @Type("string")
     */
    private $LogisticalNo;

    /**
     * @Type("integer")
     */
    private $Status;

    /**
     * @Type("string")
     */
    private $OrderId;

    /**
     * @Type("array<Entity\Order\OrderLine\OrderAttachements\OrderAttachements>")
     * @var array
     */
    private $OrderAttachements;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param mixed $Id
     */
    public function setId($Id)
    {
        $this->Id = $Id;
    }

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->ProductId;
    }

    /**
     * @param mixed $ProductId
     */
    public function setProductId($ProductId)
    {
        $this->ProductId = $ProductId;
    }

    /**
     * @return mixed
     */
    public function getPoProductNo()
    {
        return $this->PoProductNo;
    }

    /**
     * @param mixed $PoProductNo
     */
    public function setPoProductNo($PoProductNo)
    {
        $this->PoProductNo = $PoProductNo;
    }

    /**
     * @return mixed
     */
    public function getProductName()
    {
        return $this->ProductName;
    }

    /**
     * @param mixed $ProductName
     */
    public function setProductName($ProductName)
    {
        $this->ProductName = $ProductName;
    }

    /**
     * @return mixed
     */
    public function getAttributeSetInstanceId()
    {
        return $this->AttributeSetInstanceId;
    }

    /**
     * @param mixed $AttributeSetInstanceId
     */
    public function setAttributeSetInstanceId($AttributeSetInstanceId)
    {
        $this->AttributeSetInstanceId = $AttributeSetInstanceId;
    }

    /**
     * @return mixed
     */
    public function getSkuName()
    {
        return $this->SkuName;
    }

    /**
     * @param mixed $SkuName
     */
    public function setSkuName($SkuName)
    {
        $this->SkuName = $SkuName;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param mixed $Quantity
     */
    public function setQuantity($Quantity)
    {
        $this->Quantity = $Quantity;
    }

    /**
     * @return mixed
     */
    public function getQuantityUomId()
    {
        return $this->QuantityUomId;
    }

    /**
     * @param mixed $QuantityUomId
     */
    public function setQuantityUomId($QuantityUomId)
    {
        $this->QuantityUomId = $QuantityUomId;
    }

    /**
     * @return mixed
     */
    public function getListPrice()
    {
        return $this->ListPrice;
    }

    /**
     * @param mixed $ListPrice
     */
    public function setListPrice($ListPrice)
    {
        $this->ListPrice = $ListPrice;
    }

    /**
     * @return mixed
     */
    public function getListPriceUomId()
    {
        return $this->ListPriceUomId;
    }

    /**
     * @param mixed $ListPriceUomId
     */
    public function setListPriceUomId($ListPriceUomId)
    {
        $this->ListPriceUomId = $ListPriceUomId;
    }

    /**
     * @return mixed
     */
    public function getActualPrice()
    {
        return $this->ActualPrice;
    }

    /**
     * @param mixed $ActualPrice
     */
    public function setActualPrice($ActualPrice)
    {
        $this->ActualPrice = $ActualPrice;
    }

    /**
     * @return mixed
     */
    public function getActualPriceUomId()
    {
        return $this->ActualPriceUomId;
    }

    /**
     * @param mixed $ActualPriceUomId
     */
    public function setActualPriceUomId($ActualPriceUomId)
    {
        $this->ActualPriceUomId = $ActualPriceUomId;
    }

    /**
     * @return mixed
     */
    public function getOrganizationId()
    {
        return $this->OrganizationId;
    }

    /**
     * @param mixed $OrganizationId
     */
    public function setOrganizationId($OrganizationId)
    {
        $this->OrganizationId = $OrganizationId;
    }

    /**
     * @return mixed
     */
    public function getOrganizationName()
    {
        return $this->OrganizationName;
    }

    /**
     * @param mixed $OrganizationName
     */
    public function setOrganizationName($OrganizationName)
    {
        $this->OrganizationName = $OrganizationName;
    }

    /**
     * @return mixed
     */
    public function getLogisticalNo()
    {
        return $this->LogisticalNo;
    }

    /**
     * @param mixed $LogisticalNo
     */
    public function setLogisticalNo($LogisticalNo)
    {
        $this->LogisticalNo = $LogisticalNo;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param mixed $Status
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
    }

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->OrderId;
    }

    /**
     * @param mixed $OrderId
     */
    public function setOrderId($OrderId)
    {
        $this->OrderId = $OrderId;
    }

    /**
     * @return array
     */
    public function getOrderAttachements()
    {
        return $this->OrderAttachements;
    }

    /**
     * @param array $OrderAttachements
     */
    public function setOrderAttachements(array $OrderAttachements)
    {
        $this->OrderAttachements = $OrderAttachements;
    }
}