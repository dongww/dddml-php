<?php
/**
 * User: dongww
 * Date: 2016/6/6
 * Time: 20:31
 */
namespace Command\Order\OrderLine\OrderAttachement;

use JMS\Serializer\Annotation\Type;

trait IsPropertyRemovedTrait
{
    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $isPropertyAttachementTypeNameRemoved = null;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $isPropertyAttachementUrlRemoved = null;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $isPropertyAttachementTypeIdRemoved = null;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $isPropertyActiveRemoved = null;

    /**
     * @return boolean
     */
    public function getIsPropertyAttachementTypeNameRemoved()
    {
        return $this->isPropertyAttachementTypeNameRemoved;
    }

    /**
     * @param boolean $isPropertyAttachementTypeNameRemoved
     */
    public function setIsPropertyAttachementTypeNameRemoved($isPropertyAttachementTypeNameRemoved)
    {
        $this->isPropertyAttachementTypeNameRemoved = $isPropertyAttachementTypeNameRemoved;
    }

    /**
     * @return boolean
     */
    public function getIsPropertyAttachementUrlRemoved()
    {
        return $this->isPropertyAttachementUrlRemoved;
    }

    /**
     * @param boolean $isPropertyAttachementUrlRemoved
     */
    public function setIsPropertyAttachementUrlRemoved($isPropertyAttachementUrlRemoved)
    {
        $this->isPropertyAttachementUrlRemoved = $isPropertyAttachementUrlRemoved;
    }

    /**
     * @return boolean
     */
    public function getIsPropertyAttachementTypeIdRemoved()
    {
        return $this->isPropertyAttachementTypeIdRemoved;
    }

    /**
     * @param boolean $isPropertyAttachementTypeIdRemoved
     */
    public function setIsPropertyAttachementTypeIdRemoved($isPropertyAttachementTypeIdRemoved)
    {
        $this->isPropertyAttachementTypeIdRemoved = $isPropertyAttachementTypeIdRemoved;
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
