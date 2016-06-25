<?php
/**
 * User: dongww
 * Date: 2016/5/19
 * Time: 19:41
 */
namespace Entity\Store;

use Entity\Address\Address;
use JMS\Serializer\Annotation\Type;

class Store
{
    /**
     * @Type("boolean")
     * @var  bool
     */
    private $active;

    /**
     * @Type("Entity\Address\Address")
     * @var  Address
     */
    private $address;

    /**
     * @Type("string")
     * @var  string
     */
    private $businessLicence;

    /**
     * @Type("DateTime<'Y-m-d'>")
     * @var  \DateTime
     */
    private $createdTime;

    /**
     * @Type("string")
     * @var  string
     */
    private $description;

    /**
     * @Type("string")
     * @var  string
     */
    private $email;

    /**
     * @Type("string")
     * @var  string
     */
    private $id;

    /**
     * @Type("string")
     * @var  string
     */
    private $linkman;

    /**
     * @Type("string")
     * @var  string
     */
    private $mobilePhone;

    /**
     * @Type("string")
     * @var  string
     */
    private $name;

    /**
     * @Type("string")
     * @var  string
     */
    private $qq;

    /**
     * @Type("string")
     * @var  string
     */
    private $telephone;

    /**
     * @return boolean
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param boolean $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param Address $address
     */
    public function setAddress(Address $address)
    {
        $this->address = $address;
    }

    /**
     * @return string
     */
    public function getBusinessLicence()
    {
        return $this->businessLicence;
    }

    /**
     * @param string $businessLicence
     */
    public function setBusinessLicence($businessLicence)
    {
        $this->businessLicence = $businessLicence;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedTime()
    {
        return $this->createdTime;
    }

    /**
     * @param \DateTime $createdTime
     */
    public function setCreatedTime($createdTime)
    {
        $this->createdTime = $createdTime;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getLinkman()
    {
        return $this->linkman;
    }

    /**
     * @param string $linkman
     */
    public function setLinkman($linkman)
    {
        $this->linkman = $linkman;
    }

    /**
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }

    /**
     * @param string $mobilePhone
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->mobilePhone = $mobilePhone;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getQq()
    {
        return $this->qq;
    }

    /**
     * @param string $qq
     */
    public function setQq($qq)
    {
        $this->qq = $qq;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }
}
