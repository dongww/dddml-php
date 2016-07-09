<?php
/**
 * User: dongww
 * Date: 2016/7/9
 * Time: 15:08
 */
namespace Command\Permission;

use JMS\Serializer\Annotation\Type;

trait IsPropertyRemovedTrait
{
    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $isPropertyNameRemoved;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $isPropertyParentPermissionIdRemoved;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $isPropertyDescriptionRemoved;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $isPropertyActiveRemoved;

    /**
     * @return boolean
     */
    public function isIsPropertyNameRemoved()
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
    public function isIsPropertyParentPermissionIdRemoved()
    {
        return $this->isPropertyParentPermissionIdRemoved;
    }

    /**
     * @param boolean $isPropertyParentPermissionIdRemoved
     */
    public function setIsPropertyParentPermissionIdRemoved($isPropertyParentPermissionIdRemoved)
    {
        $this->isPropertyParentPermissionIdRemoved = $isPropertyParentPermissionIdRemoved;
    }

    /**
     * @return boolean
     */
    public function isIsPropertyDescriptionRemoved()
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
    public function isIsPropertyActiveRemoved()
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
