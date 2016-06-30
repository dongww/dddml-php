<?php
/**
 * User: dongww
 * Date: 2016/5/30
 * Time: 21:02
 */
namespace Dddml\Command;

use JMS\Serializer\Annotation\Type;

/**
 * 命令 Trait，包含命令所必须的一些字段，可以被序列化和反序列化
 *
 * @package Dddml\Command
 */
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

    /**
     * 构造函数
     *
     * @param string $commandType 命令类型
     */
    public function __construct($commandType = null)
    {
        $this->setCommandType($commandType);
    }

    /**
     * @return string 获取命令类型
     */
    public function getCommandType()
    {
        return $this->CommandType;
    }

    /**
     * 设置命令类型
     *
     * @param string $CommandType 命令类型
     */
    public function setCommandType($CommandType)
    {
        $this->CommandType = $CommandType;
    }

    /**
     * @return int
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * @param int $Version
     */
    public function setVersion($Version)
    {
        $this->Version = $Version;
    }

    /**
     * @return string
     */
    public function getCommandId()
    {
        return $this->CommandId;
    }

    /**
     * @param string $CommandId
     */
    public function setCommandId($CommandId)
    {
        $this->CommandId = $CommandId;
    }

    /**
     * @return string
     */
    public function getRequesterId()
    {
        return $this->RequesterId;
    }

    /**
     * @param string $RequesterId
     */
    public function setRequesterId($RequesterId)
    {
        $this->RequesterId = $RequesterId;
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * @param bool $Active
     */
    public function setActive($Active)
    {
        $this->Active = $Active;
    }
}
