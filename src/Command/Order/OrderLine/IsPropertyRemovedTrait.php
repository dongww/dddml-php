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
    private $IsPropertyProductIdRemoved = null;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $IsPropertyPoProductNoRemoved = null;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $IsPropertyProductNameRemoved = null;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $IsPropertyAttributeSetInstanceIdRemoved = null;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $IsPropertySkuNameRemoved = null;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $IsPropertyQuantityRemoved = null;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $IsPropertyQuantityUomIdRemoved = null;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $IsPropertyListPriceRemoved = null;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $IsPropertyListPriceUomIdRemoved = null;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $IsPropertyActualPriceRemoved = null;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $IsPropertyActualPriceUomIdRemoved = null;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $IsPropertyOrganizationIdRemoved = null;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $IsPropertyOrganizationNameRemoved = null;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $IsPropertyLogisticalNoRemoved = null;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $IsPropertyStatusRemoved = null;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $IsPropertyActiveRemoved = null;

    /**
     * @return boolean
     */
    public function isIsPropertyProductIdRemoved()
    {
        return $this->IsPropertyProductIdRemoved;
    }

    /**
     * @param boolean $IsPropertyProductIdRemoved
     */
    public function setIsPropertyProductIdRemoved($IsPropertyProductIdRemoved)
    {
        $this->IsPropertyProductIdRemoved = $IsPropertyProductIdRemoved;
    }

    /**
     * @return boolean
     */
    public function isIsPropertyPoProductNoRemoved()
    {
        return $this->IsPropertyPoProductNoRemoved;
    }

    /**
     * @param boolean $IsPropertyPoProductNoRemoved
     */
    public function setIsPropertyPoProductNoRemoved($IsPropertyPoProductNoRemoved)
    {
        $this->IsPropertyPoProductNoRemoved = $IsPropertyPoProductNoRemoved;
    }

    /**
     * @return boolean
     */
    public function isIsPropertyProductNameRemoved()
    {
        return $this->IsPropertyProductNameRemoved;
    }

    /**
     * @param boolean $IsPropertyProductNameRemoved
     */
    public function setIsPropertyProductNameRemoved($IsPropertyProductNameRemoved)
    {
        $this->IsPropertyProductNameRemoved = $IsPropertyProductNameRemoved;
    }

    /**
     * @return boolean
     */
    public function isIsPropertyAttributeSetInstanceIdRemoved()
    {
        return $this->IsPropertyAttributeSetInstanceIdRemoved;
    }

    /**
     * @param boolean $IsPropertyAttributeSetInstanceIdRemoved
     */
    public function setIsPropertyAttributeSetInstanceIdRemoved($IsPropertyAttributeSetInstanceIdRemoved)
    {
        $this->IsPropertyAttributeSetInstanceIdRemoved = $IsPropertyAttributeSetInstanceIdRemoved;
    }

    /**
     * @return boolean
     */
    public function isIsPropertySkuNameRemoved()
    {
        return $this->IsPropertySkuNameRemoved;
    }

    /**
     * @param boolean $IsPropertySkuNameRemoved
     */
    public function setIsPropertySkuNameRemoved($IsPropertySkuNameRemoved)
    {
        $this->IsPropertySkuNameRemoved = $IsPropertySkuNameRemoved;
    }

    /**
     * @return boolean
     */
    public function isIsPropertyQuantityRemoved()
    {
        return $this->IsPropertyQuantityRemoved;
    }

    /**
     * @param boolean $IsPropertyQuantityRemoved
     */
    public function setIsPropertyQuantityRemoved($IsPropertyQuantityRemoved)
    {
        $this->IsPropertyQuantityRemoved = $IsPropertyQuantityRemoved;
    }

    /**
     * @return boolean
     */
    public function isIsPropertyQuantityUomIdRemoved()
    {
        return $this->IsPropertyQuantityUomIdRemoved;
    }

    /**
     * @param boolean $IsPropertyQuantityUomIdRemoved
     */
    public function setIsPropertyQuantityUomIdRemoved($IsPropertyQuantityUomIdRemoved)
    {
        $this->IsPropertyQuantityUomIdRemoved = $IsPropertyQuantityUomIdRemoved;
    }

    /**
     * @return boolean
     */
    public function isIsPropertyListPriceRemoved()
    {
        return $this->IsPropertyListPriceRemoved;
    }

    /**
     * @param boolean $IsPropertyListPriceRemoved
     */
    public function setIsPropertyListPriceRemoved($IsPropertyListPriceRemoved)
    {
        $this->IsPropertyListPriceRemoved = $IsPropertyListPriceRemoved;
    }

    /**
     * @return boolean
     */
    public function isIsPropertyListPriceUomIdRemoved()
    {
        return $this->IsPropertyListPriceUomIdRemoved;
    }

    /**
     * @param boolean $IsPropertyListPriceUomIdRemoved
     */
    public function setIsPropertyListPriceUomIdRemoved($IsPropertyListPriceUomIdRemoved)
    {
        $this->IsPropertyListPriceUomIdRemoved = $IsPropertyListPriceUomIdRemoved;
    }

    /**
     * @return boolean
     */
    public function isIsPropertyActualPriceRemoved()
    {
        return $this->IsPropertyActualPriceRemoved;
    }

    /**
     * @param boolean $IsPropertyActualPriceRemoved
     */
    public function setIsPropertyActualPriceRemoved($IsPropertyActualPriceRemoved)
    {
        $this->IsPropertyActualPriceRemoved = $IsPropertyActualPriceRemoved;
    }

    /**
     * @return boolean
     */
    public function isIsPropertyActualPriceUomIdRemoved()
    {
        return $this->IsPropertyActualPriceUomIdRemoved;
    }

    /**
     * @param boolean $IsPropertyActualPriceUomIdRemoved
     */
    public function setIsPropertyActualPriceUomIdRemoved($IsPropertyActualPriceUomIdRemoved)
    {
        $this->IsPropertyActualPriceUomIdRemoved = $IsPropertyActualPriceUomIdRemoved;
    }

    /**
     * @return boolean
     */
    public function isIsPropertyOrganizationIdRemoved()
    {
        return $this->IsPropertyOrganizationIdRemoved;
    }

    /**
     * @param boolean $IsPropertyOrganizationIdRemoved
     */
    public function setIsPropertyOrganizationIdRemoved($IsPropertyOrganizationIdRemoved)
    {
        $this->IsPropertyOrganizationIdRemoved = $IsPropertyOrganizationIdRemoved;
    }

    /**
     * @return boolean
     */
    public function isIsPropertyOrganizationNameRemoved()
    {
        return $this->IsPropertyOrganizationNameRemoved;
    }

    /**
     * @param boolean $IsPropertyOrganizationNameRemoved
     */
    public function setIsPropertyOrganizationNameRemoved($IsPropertyOrganizationNameRemoved)
    {
        $this->IsPropertyOrganizationNameRemoved = $IsPropertyOrganizationNameRemoved;
    }

    /**
     * @return boolean
     */
    public function isIsPropertyLogisticalNoRemoved()
    {
        return $this->IsPropertyLogisticalNoRemoved;
    }

    /**
     * @param boolean $IsPropertyLogisticalNoRemoved
     */
    public function setIsPropertyLogisticalNoRemoved($IsPropertyLogisticalNoRemoved)
    {
        $this->IsPropertyLogisticalNoRemoved = $IsPropertyLogisticalNoRemoved;
    }

    /**
     * @return boolean
     */
    public function isIsPropertyStatusRemoved()
    {
        return $this->IsPropertyStatusRemoved;
    }

    /**
     * @param boolean $IsPropertyStatusRemoved
     */
    public function setIsPropertyStatusRemoved($IsPropertyStatusRemoved)
    {
        $this->IsPropertyStatusRemoved = $IsPropertyStatusRemoved;
    }

    /**
     * @return boolean
     */
    public function isIsPropertyActiveRemoved()
    {
        return $this->IsPropertyActiveRemoved;
    }

    /**
     * @param boolean $IsPropertyActiveRemoved
     */
    public function setIsPropertyActiveRemoved($IsPropertyActiveRemoved)
    {
        $this->IsPropertyActiveRemoved = $IsPropertyActiveRemoved;
    }
}