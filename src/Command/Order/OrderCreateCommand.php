<?php
/**
 * User: dongww
 * Date: 2016/7/8
 * Time: 11:26
 */
namespace Command\Order;

use Dddml\Command\CommandBodyInterface;
use Dddml\Command\CommandExecutor;
use Dddml\Command\CommandInterface;
use Dddml\Routing\RouteTrait;
use Symfony\Component\Routing\Route;

class OrderCreateCommand implements CommandInterface
{
    use RouteTrait;

    /**
     * @var CommandBodyInterface
     */
    private $body;

    public function __construct()
    {
        $body = $this->getBody();
        $body->setCommandType(static::COMMAND_CREATE);

        $this->route = new Route('Orders/{id}');
    }

    public function getMethod()
    {
        return CommandExecutor::METHOD_PUT;
    }

    /**
     * @return OrderCommandBody
     */
    public function getBody()
    {
        if (!$this->body) {
            $this->body = new OrderCommandBody();
        }

        return $this->body;
    }
}
