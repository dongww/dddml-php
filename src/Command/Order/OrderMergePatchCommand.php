<?php
/**
 * User: dongww
 * Date: 2016/7/9
 * Time: 11:58
 */
namespace Command\Order;

use Dddml\Command\CommandExecutor;
use Dddml\Command\CommandInterface;
use Dddml\Routing\RouteTrait;
use Symfony\Component\Routing\Route;

class OrderMergePatchCommand implements CommandInterface
{
    use RouteTrait;

    /**
     * @var OrderCommandBody
     */
    private $body;

    public function __construct()
    {
        $body = $this->getBody();
        $body->setCommandType(static::COMMAND_MERGE_PATCH);

        $this->route = new Route('Orders/{id}');
    }

    public function getMethod()
    {
        return CommandExecutor::METHOD_PATCH;
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
