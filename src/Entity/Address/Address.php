<?php
/**
 * User: dongww
 * Date: 2016/5/19
 * Time: 19:56
 */

namespace Entity\Address;

use JMS\Serializer\Annotation\Type;

class Address
{
    /**
     * @Type("string")
     * @var  string
     */
    private $addressLine1;

    /**
     * @Type("integer")
     * @var  int
     */
    private $cityId;

    /**
     * @Type("string")
     * @var string
     */
    private $country;

    /**
     * @Type("integer")
     * @var  int
     */
    private $countyId;

    /**
     * @Type("boolean")
     * @var  bool
     */
    private $new;

    /**
     * @Type("string")
     * @var  string
     */
    private $postalCode;

    /**
     * @Type("integer")
     * @var  int
     */
    private $provinceId;

    /**
     * @Type("string")
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->addressLine1;
    }

    /**
     * @param string $addressLine1
     */
    public function setAddressLine1($addressLine1)
    {
        $this->addressLine1 = $addressLine1;
    }

    /**
     * @return int
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * @param int $cityId
     */
    public function setCityId($cityId)
    {
        $this->cityId = $cityId;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return int
     */
    public function getCountyId()
    {
        return $this->countyId;
    }

    /**
     * @param int $countyId
     */
    public function setCountyId($countyId)
    {
        $this->countyId = $countyId;
    }

    /**
     * @return boolean
     */
    public function isNew()
    {
        return $this->new;
    }

    /**
     * @param boolean $new
     */
    public function setNew($new)
    {
        $this->new = $new;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return int
     */
    public function getProvinceId()
    {
        return $this->provinceId;
    }

    /**
     * @param int $provinceId
     */
    public function setProvinceId($provinceId)
    {
        $this->provinceId = $provinceId;
    }
}