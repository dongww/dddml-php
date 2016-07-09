<?php
/**
 * User: dongww
 * Date: 2016/7/9
 * Time: 12:07
 */
namespace Command\Order\OrderLine;

use Dddml\Command\CommandExecutor;
use Dddml\Command\CommandInterface;
use Dddml\Routing\RouteTrait;

class OrderLineMergePatchCommand implements CommandInterface
{
    use RouteTrait;

    /**
     * @var OrderLineCommandBody
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
     * @return OrderLineCommandBody
     */
    public function getBody()
    {
        if (!$this->body) {
            $this->body = new OrderLineCommandBody();
        }

        return $this->body;
    }
}
