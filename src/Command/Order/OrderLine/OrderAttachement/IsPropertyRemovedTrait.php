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
    private $IsPropertyAttachementTypeNameRemoved = null;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $IsPropertyAttachementUrlRemoved = null;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $IsPropertyAttachementTypeIdRemoved = null;

    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $IsPropertyActiveRemoved = null;

    /**
     * @return boolean
     */
    public function isIsPropertyAttachementTypeNameRemoved()
    {
        return $this->IsPropertyAttachementTypeNameRemoved;
    }

    /**
     * @param boolean $IsPropertyAttachementTypeNameRemoved
     */
    public function setIsPropertyAttachementTypeNameRemoved($IsPropertyAttachementTypeNameRemoved)
    {
        $this->IsPropertyAttachementTypeNameRemoved = $IsPropertyAttachementTypeNameRemoved;
    }

    /**
     * @return boolean
     */
    public function isIsPropertyAttachementUrlRemoved()
    {
        return $this->IsPropertyAttachementUrlRemoved;
    }

    /**
     * @param boolean $IsPropertyAttachementUrlRemoved
     */
    public function setIsPropertyAttachementUrlRemoved($IsPropertyAttachementUrlRemoved)
    {
        $this->IsPropertyAttachementUrlRemoved = $IsPropertyAttachementUrlRemoved;
    }

    /**
     * @return boolean
     */
    public function isIsPropertyAttachementTypeIdRemoved()
    {
        return $this->IsPropertyAttachementTypeIdRemoved;
    }

    /**
     * @param boolean $IsPropertyAttachementTypeIdRemoved
     */
    public function setIsPropertyAttachementTypeIdRemoved($IsPropertyAttachementTypeIdRemoved)
    {
        $this->IsPropertyAttachementTypeIdRemoved = $IsPropertyAttachementTypeIdRemoved;
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