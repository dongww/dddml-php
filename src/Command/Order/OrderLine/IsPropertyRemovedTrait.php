<?php
/**
 * User: dongww
 * Date: 2016/6/6
 * Time: 20:31
 */
namespace Command\Order\OrderLine;

use JMS\Serializer\Annotation\Type;

trait IsPropertyRemovedTrait
{
    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $isPropertyProductIdRemoved = null;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $isPropertyPoProductNoRemoved = null;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $isPropertyProductNameRemoved = null;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $isPropertyAttributeSetInstanceIdRemoved = null;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $isPropertySkuNameRemoved = null;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $isPropertyQuantityRemoved = null;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $isPropertyQuantityUomIdRemoved = null;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $isPropertyListPriceRemoved = null;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $isPropertyListPriceUomIdRemoved = null;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $isPropertyActualPriceRemoved = null;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $isPropertyActualPriceUomIdRemoved = null;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $isPropertyOrganizationIdRemoved = null;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $isPropertyOrganizationNameRemoved = null;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $isPropertyLogisticalNoRemoved = null;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $isPropertyStatusRemoved = null;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $isPropertyActiveRemoved = null;

    /**
     * @return boolean
     */
    public function getIsPropertyProductIdRemoved()
    {
        return $this->isPropertyProductIdRemoved;
    }

    /**
     * @param boolean $isPropertyProductIdRemoved
     */
    public function setIsPropertyProductIdRemoved($isPropertyProductIdRemoved)
    {
        $this->isPropertyProductIdRemoved = $isPropertyProductIdRemoved;
    }

    /**
     * @return boolean
     */
    public function getIsPropertyPoProductNoRemoved()
    {
        return $this->isPropertyPoProductNoRemoved;
    }

    /**
     * @param boolean $isPropertyPoProductNoRemoved
     */
    public function setIsPropertyPoProductNoRemoved($isPropertyPoProductNoRemoved)
    {
        $this->isPropertyPoProductNoRemoved = $isPropertyPoProductNoRemoved;
    }

    /**
     * @return boolean
     */
    public function getIsPropertyProductNameRemoved()
    {
        return $this->isPropertyProductNameRemoved;
    }

    /**
     * @param boolean $isPropertyProductNameRemoved
     */
    public function setIsPropertyProductNameRemoved($isPropertyProductNameRemoved)
    {
        $this->isPropertyProductNameRemoved = $isPropertyProductNameRemoved;
    }

    /**
     * @return boolean
     */
    public function getIsPropertyAttributeSetInstanceIdRemoved()
    {
        return $this->isPropertyAttributeSetInstanceIdRemoved;
    }

    /**
     * @param boolean $isPropertyAttributeSetInstanceIdRemoved
     */
    public function setIsPropertyAttributeSetInstanceIdRemoved($isPropertyAttributeSetInstanceIdRemoved)
    {
        $this->isPropertyAttributeSetInstanceIdRemoved = $isPropertyAttributeSetInstanceIdRemoved;
    }

    /**
     * @return boolean
     */
    public function getIsPropertySkuNameRemoved()
    {
        return $this->isPropertySkuNameRemoved;
    }

    /**
     * @param boolean $isPropertySkuNameRemoved
     */
    public function setIsPropertySkuNameRemoved($isPropertySkuNameRemoved)
    {
        $this->isPropertySkuNameRemoved = $isPropertySkuNameRemoved;
    }

    /**
     * @return boolean
     */
    public function getIsPropertyQuantityRemoved()
    {
        return $this->isPropertyQuantityRemoved;
    }

    /**
     * @param boolean $isPropertyQuantityRemoved
     */
    public function setIsPropertyQuantityRemoved($isPropertyQuantityRemoved)
    {
        $this->isPropertyQuantityRemoved = $isPropertyQuantityRemoved;
    }

    /**
     * @return boolean
     */
    public function getIsPropertyQuantityUomIdRemoved()
    {
        return $this->isPropertyQuantityUomIdRemoved;
    }

    /**
     * @param boolean $isPropertyQuantityUomIdRemoved
     */
    public function setIsPropertyQuantityUomIdRemoved($isPropertyQuantityUomIdRemoved)
    {
        $this->isPropertyQuantityUomIdRemoved = $isPropertyQuantityUomIdRemoved;
    }

    /**
     * @return boolean
     */
    public function getIsPropertyListPriceRemoved()
    {
        return $this->isPropertyListPriceRemoved;
    }

    /**
     * @param boolean $isPropertyListPriceRemoved
     */
    public function setIsPropertyListPriceRemoved($isPropertyListPriceRemoved)
    {
        $this->isPropertyListPriceRemoved = $isPropertyListPriceRemoved;
    }

    /**
     * @return boolean
     */
    public function getIsPropertyListPriceUomIdRemoved()
    {
        return $this->isPropertyListPriceUomIdRemoved;
    }

    /**
     * @param boolean $isPropertyListPriceUomIdRemoved
     */
    public function setIsPropertyListPriceUomIdRemoved($isPropertyListPriceUomIdRemoved)
    {
        $this->isPropertyListPriceUomIdRemoved = $isPropertyListPriceUomIdRemoved;
    }

    /**
     * @return boolean
     */
    public function getIsPropertyActualPriceRemoved()
    {
        return $this->isPropertyActualPriceRemoved;
    }

    /**
     * @param boolean $isPropertyActualPriceRemoved
     */
    public function setIsPropertyActualPriceRemoved($isPropertyActualPriceRemoved)
    {
        $this->isPropertyActualPriceRemoved = $isPropertyActualPriceRemoved;
    }

    /**
     * @return boolean
     */
    public function getIsPropertyActualPriceUomIdRemoved()
    {
        return $this->isPropertyActualPriceUomIdRemoved;
    }

    /**
     * @param boolean $isPropertyActualPriceUomIdRemoved
     */
    public function setIsPropertyActualPriceUomIdRemoved($isPropertyActualPriceUomIdRemoved)
    {
        $this->isPropertyActualPriceUomIdRemoved = $isPropertyActualPriceUomIdRemoved;
    }

    /**
     * @return boolean
     */
    public function getIsPropertyOrganizationIdRemoved()
    {
        return $this->isPropertyOrganizationIdRemoved;
    }

    /**
     * @param boolean $isPropertyOrganizationIdRemoved
     */
    public function setIsPropertyOrganizationIdRemoved($isPropertyOrganizationIdRemoved)
    {
        $this->isPropertyOrganizationIdRemoved = $isPropertyOrganizationIdRemoved;
    }

    /**
     * @return boolean
     */
    public function getIsPropertyOrganizationNameRemoved()
    {
        return $this->isPropertyOrganizationNameRemoved;
    }

    /**
     * @param boolean $isPropertyOrganizationNameRemoved
     */
    public function setIsPropertyOrganizationNameRemoved($isPropertyOrganizationNameRemoved)
    {
        $this->isPropertyOrganizationNameRemoved = $isPropertyOrganizationNameRemoved;
    }

    /**
     * @return boolean
     */
    public function getIsPropertyLogisticalNoRemoved()
    {
        return $this->isPropertyLogisticalNoRemoved;
    }

    /**
     * @param boolean $isPropertyLogisticalNoRemoved
     */
    public function setIsPropertyLogisticalNoRemoved($isPropertyLogisticalNoRemoved)
    {
        $this->isPropertyLogisticalNoRemoved = $isPropertyLogisticalNoRemoved;
    }

    /**
     * @return boolean
     */
    public function getIsPropertyStatusRemoved()
    {
        return $this->isPropertyStatusRemoved;
    }

    /**
     * @param boolean $isPropertyStatusRemoved
     */
    public function setIsPropertyStatusRemoved($isPropertyStatusRemoved)
    {
        $this->isPropertyStatusRemoved = $isPropertyStatusRemoved;
    }

    /**
     * @return boolean
     */
    public function getIsPropertyActiveRemoved()
    {
        return $this->isPropertyActiveRemoved;
    }

    /**
     * @param boolean $isPropertyActiveRemoved
     */
    public function setIsPropertyActiveRemoved($isPropertyActiveRemoved)
    {
        $this->isPropertyActiveRemoved = $isPropertyActiveRemoved;
    }
}
