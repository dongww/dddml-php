<?php
/**
 * User: dongww
 * Date: 2016/6/6
 * Time: 19:00
 */
namespace Entity\Order\OrderLine;

use Dddml\BaseEntity;
use JMS\Serializer\Annotation\Type;

class OrderLine extends BaseEntity
{
    /**
     * @Type("string")
     */
    private $id;

    /**
     * @Type("string")
     */
    private $productId;

    /**
     * @Type("string")
     */
    private $productNo;

    /**
     * @Type("string")
     */
    private $productName;

    /**
     * @Type("string")
     */
    private $attributeSetInstanceId;

    /**
     * @Type("string")
     */
    private $skuName;

    /**
     * @Type("double")
     */
    private $quantity;

    /**
     * @Type("string")
     */
    private $quantityUomId;

    /**
     * @Type("double")
     */
    private $listPrice;

    /**
     * @Type("string")
     */
    private $listPriceUomId;

    /**
     * @Type("double")
     */
    private $actualPrice;

    /**
     * @Type("string")
     */
    private $actualPriceUomId;

    /**
     * @Type("string")
     */
    private $organizationId;

    /**
     * @Type("string")
     */
    private $organizationName;

    /**
     * @Type("string")
     */
    private $logisticalNo;

    /**
     * @Type("integer")
     */
    private $status;

    /**
     * @Type("string")
     */
    private $orderId;

    /**
     * @Type("array<Entity\Order\OrderLine\OrderAttachements\OrderAttachements>")
     * @var array
     */
    private $orderAttachements;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param mixed $productId
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }

    /**
     * @return mixed
     */
    public function getProductNo()
    {
        return $this->productNo;
    }

    /**
     * @param mixed $productNo
     */
    public function setProductNo($productNo)
    {
        $this->productNo = $productNo;
    }

    /**
     * @return mixed
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param mixed $productName
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
    }

    /**
     * @return mixed
     */
    public function getAttributeSetInstanceId()
    {
        return $this->attributeSetInstanceId;
    }

    /**
     * @param mixed $attributeSetInstanceId
     */
    public function setAttributeSetInstanceId($attributeSetInstanceId)
    {
        $this->attributeSetInstanceId = $attributeSetInstanceId;
    }

    /**
     * @return mixed
     */
    public function getSkuName()
    {
        return $this->skuName;
    }

    /**
     * @param mixed $skuName
     */
    public function setSkuName($skuName)
    {
        $this->skuName = $skuName;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getQuantityUomId()
    {
        return $this->quantityUomId;
    }

    /**
     * @param mixed $quantityUomId
     */
    public function setQuantityUomId($quantityUomId)
    {
        $this->quantityUomId = $quantityUomId;
    }

    /**
     * @return mixed
     */
    public function getListPrice()
    {
        return $this->listPrice;
    }

    /**
     * @param mixed $listPrice
     */
    public function setListPrice($listPrice)
    {
        $this->listPrice = $listPrice;
    }

    /**
     * @return mixed
     */
    public function getListPriceUomId()
    {
        return $this->listPriceUomId;
    }

    /**
     * @param mixed $listPriceUomId
     */
    public function setListPriceUomId($listPriceUomId)
    {
        $this->listPriceUomId = $listPriceUomId;
    }

    /**
     * @return mixed
     */
    public function getActualPrice()
    {
        return $this->actualPrice;
    }

    /**
     * @param mixed $actualPrice
     */
    public function setActualPrice($actualPrice)
    {
        $this->actualPrice = $actualPrice;
    }

    /**
     * @return mixed
     */
    public function getActualPriceUomId()
    {
        return $this->actualPriceUomId;
    }

    /**
     * @param mixed $actualPriceUomId
     */
    public function setActualPriceUomId($actualPriceUomId)
    {
        $this->actualPriceUomId = $actualPriceUomId;
    }

    /**
     * @return mixed
     */
    public function getOrganizationId()
    {
        return $this->organizationId;
    }

    /**
     * @param mixed $organizationId
     */
    public function setOrganizationId($organizationId)
    {
        $this->organizationId = $organizationId;
    }

    /**
     * @return mixed
     */
    public function getOrganizationName()
    {
        return $this->organizationName;
    }

    /**
     * @param mixed $organizationName
     */
    public function setOrganizationName($organizationName)
    {
        $this->organizationName = $organizationName;
    }

    /**
     * @return mixed
     */
    public function getLogisticalNo()
    {
        return $this->logisticalNo;
    }

    /**
     * @param mixed $logisticalNo
     */
    public function setLogisticalNo($logisticalNo)
    {
        $this->logisticalNo = $logisticalNo;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param mixed $orderId
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * @return array
     */
    public function getOrderAttachements()
    {
        return $this->orderAttachements;
    }

    /**
     * @param array $orderAttachements
     */
    public function setOrderAttachements(array $orderAttachements)
    {
        $this->orderAttachements = $orderAttachements;
    }
}
