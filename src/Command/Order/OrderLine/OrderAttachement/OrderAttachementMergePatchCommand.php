<?php
/**
 * User: dongww
 * Date: 2016/7/9
 * Time: 12:10
 */
namespace Command\Order\OrderLine\OrderAttachement;

use Dddml\Command\CommandExecutor;
use Dddml\Command\CommandInterface;
use Dddml\Routing\RouteTrait;

class OrderAttachementMergePatchCommand implements CommandInterface
{
    use RouteTrait;

    /**
     * @var OrderAttachementCommandBody
     */
    private $body;

    public function __construct()
    {
        $body = $this->getBody();
        $body->setCommandType(static::COMMAND_MERGE_PATCH);
    }

    public function getMethod()
    {
        return CommandExecutor::METHOD_PATCH;
    }

    /**
     * @return OrderAttachementCommandBody
     */
    public function getBody()
    {
        if (!$this->body) {
            $this->body = new OrderAttachementCommandBody();
        }

        return $this->body;
    }
}