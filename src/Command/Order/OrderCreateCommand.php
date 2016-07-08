<?php
/**
 * User: dongww
 * Date: 2016/7/8
 * Time: 11:26
 */
namespace Command\Order;

use Dddml\Command\CommandExecutor;
use Dddml\Command\CommandInterface;
use Dddml\Command\CommandTrait;
use Dddml\Routing\RouteTrait;
use Entity\Order\OrderFieldsTrait;
use Symfony\Component\Routing\Route;

class OrderCreateCommand implements CommandInterface
{
    use OrderFieldsTrait, CommandTrait, IsPropertyRemovedTrait, EmbeddedCommandTrait, RouteTrait;

    public function __construct()
    {
        $this->commandType = static::COMMAND_CREATE;

        $this->route = new Route('Roles/{id}');
    }

    public function getMethod()
    {
        return CommandExecutor::METHOD_PUT;
    }
}
