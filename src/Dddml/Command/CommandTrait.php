<?php
/**
 * User: dongww
 * Date: 2016/5/30
 * Time: 21:02
 */
namespace Dddml\Command;

use JMS\Serializer\Annotation\Type;

trait CommandTrait
{
    /**
     * @Type("string")
     */
    protected $CommandType;
    /**
     * @Type("integer")
     */
    protected $Version = 0;

    /**
     * @Type("string")
     */
    protected $CommandId;

    /**
     * @Type("string")
     */
    protected $RequesterId;

    /**
     * @Type("boolean")
     */
    protected $Active;

    public function __construct($commandType = null)
    {
        $this->setCommandType($commandType);
    }

    /**
     * @return mixed
     */
    public function getCommandType()
    {
        return $this->CommandType;
    }

    /**
     * @param mixed $CommandType
     */
    public function setCommandType($CommandType)
    {
        $this->CommandType = $CommandType;
    }

    /**
     * @return mixed
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * @param mixed $Version
     */
    public function setVersion($Version)
    {
        $this->Version = $Version;
    }

    /**
     * @return mixed
     */
    public function getCommandId()
    {
        return $this->CommandId;
    }

    /**
     * @param mixed $CommandId
     */
    public function setCommandId($CommandId)
    {
        $this->CommandId = $CommandId;
    }

    /**
     * @return mixed
     */
    public function getRequesterId()
    {
        return $this->RequesterId;
    }

    /**
     * @param mixed $RequesterId
     */
    public function setRequesterId($RequesterId)
    {
        $this->RequesterId = $RequesterId;
    }

    /**
     * @return mixed
     */
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * @param mixed $Active
     */
    public function setActive($Active)
    {
        $this->Active = $Active;
    }
}
