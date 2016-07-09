<?php
/**
 * User: dongww
 * Date: 2016/7/8
 * Time: 10:57
 */
namespace Command\Order\OrderLine\OrderAttachement;

use Dddml\Command\CommandExecutor;
use Dddml\Command\CommandInterface;
use Dddml\Routing\RouteTrait;

class OrderAttachementCreateCommand implements CommandInterface
{
    use RouteTrait;

    /**
     * @var OrderAttachementCommandBody
     */
    private $body;

    public function __construct()
    {
        $body = $this->getBody();
        $body->setCommandType(static::COMMAND_CREATE);
    }

    public function getMethod()
    {
        return CommandExecutor::METHOD_PUT;
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
