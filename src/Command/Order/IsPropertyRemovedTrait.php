<?php
/**
 * User: dongww
 * Date: 2016/6/6
 * Time: 20:31
 */
namespace Command\Order;

use JMS\Serializer\Annotation\Type;

trait IsPropertyRemovedTrait
{
    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $isPropertyOrderNoRemoved = null;

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
    private $isPropertyDescriptionRemoved = null;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $isPropertyActiveRemoved = null;

    /**
     * @return boolean
     */
    public function getIsPropertyOrderNoRemoved()
    {
        return $this->isPropertyOrderNoRemoved;
    }

    /**
     * @param boolean $isPropertyOrderNoRemoved
     */
    public function setIsPropertyOrderNoRemoved($isPropertyOrderNoRemoved)
    {
        $this->isPropertyOrderNoRemoved = $isPropertyOrderNoRemoved;
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
    public function getIsPropertyDescriptionRemoved()
    {
        return $this->isPropertyDescriptionRemoved;
    }

    /**
     * @param boolean $isPropertyDescriptionRemoved
     */
    public function setIsPropertyDescriptionRemoved($isPropertyDescriptionRemoved)
    {
        $this->isPropertyDescriptionRemoved = $isPropertyDescriptionRemoved;
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
