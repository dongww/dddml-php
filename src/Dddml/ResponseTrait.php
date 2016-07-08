<?php
/**
 * User: dongww
 * Date: 2016/7/4
 * Time: 19:47
 */
namespace Dddml;

use JMS\Serializer\Annotation\Type;

trait ResponseTrait
{
    /**
     * @Type("string")
     *
     * @var string
     */
    private $createdBy;

    /**
     * @Type("\DateTime")
     *
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @Type("string")
     *
     * @var string
     */
    private $updatedBy;

    /**
     * @Type("\DateTime")
     *
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $allFieldsReturned;

    /**
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param string $createdBy
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return string
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * @param string $updatedBy
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return boolean
     */
    public function isAllFieldsReturned()
    {
        return $this->allFieldsReturned;
    }

    /**
     * @param boolean $allFieldsReturned
     */
    public function setAllFieldsReturned($allFieldsReturned)
    {
        $this->allFieldsReturned = $allFieldsReturned;
    }
}
