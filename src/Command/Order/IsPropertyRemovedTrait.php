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
    private $IsPropertyOrderNoRemoved = null;

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
    private $IsPropertyDescriptionRemoved = null;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $IsPropertyActiveRemoved = null;

    /**
     * @return boolean
     */
    public function isIsPropertyOrderNoRemoved()
    {
        return $this->IsPropertyOrderNoRemoved;
    }

    /**
     * @param boolean $IsPropertyOrderNoRemoved
     */
    public function setIsPropertyOrderNoRemoved($IsPropertyOrderNoRemoved)
    {
        $this->IsPropertyOrderNoRemoved = $IsPropertyOrderNoRemoved;
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
    public function isIsPropertyDescriptionRemoved()
    {
        return $this->IsPropertyDescriptionRemoved;
    }

    /**
     * @param boolean $IsPropertyDescriptionRemoved
     */
    public function setIsPropertyDescriptionRemoved($IsPropertyDescriptionRemoved)
    {
        $this->IsPropertyDescriptionRemoved = $IsPropertyDescriptionRemoved;
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