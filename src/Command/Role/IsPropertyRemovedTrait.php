<?php
/**
 * User: dongww
 * Date: 2016/7/4
 * Time: 20:04
 */
namespace Command\Role;

use JMS\Serializer\Annotation\Type;

trait IsPropertyRemovedTrait
{
    /**
     * @Type("boolean")
     *
     * @var boolean
     */
    private $isPropertyNameRemoved;

    /**
     * @Type("boolean")
     *
     * @var boolean
     */
    private $isPropertyDescriptionRemoved;

    /**
     * @Type("boolean")
     *
     * @var boolean
     */
    private $isPropertyActiveRemoved;

    /**
     * @return boolean
     */
    public function getIsPropertyNameRemoved()
    {
        return $this->isPropertyNameRemoved;
    }

    /**
     * @param boolean $isPropertyNameRemoved
     */
    public function setIsPropertyNameRemoved($isPropertyNameRemoved)
    {
        $this->isPropertyNameRemoved = $isPropertyNameRemoved;
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
