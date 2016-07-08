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
    protected $commandType;

    /**
     * @Type("string")
     */
    protected $commandId;

    /**
     * @Type("string")
     */
    protected $requesterId;

    /**
     * 设置命令类型
     *
     * @param string $commandType 命令类型
     */
    public function setCommandType($commandType)
    {
        $this->commandType = $commandType;
    }

    /**
     * @return string 获取命令类型
     */
    public function getCommandType()
    {
        return $this->commandType;
    }

    /**
     * @return string
     */
    public function getCommandId()
    {
        return $this->commandId;
    }

    /**
     * @param string $commandId
     */
    public function setCommandId($commandId)
    {
        $this->commandId = $commandId;
    }

    /**
     * @return string
     */
    public function getRequesterId()
    {
        return $this->requesterId;
    }

    /**
     * @param string $requesterId
     */
    public function setRequesterId($requesterId)
    {
        $this->requesterId = $requesterId;
    }

    /**
     * @return CommandInterface
     */
    public function getBody()
    {
        return $this;
    }
}
