<?php
/**
 * User: dongww
 * Date: 2016/6/6
 * Time: 20:20
 */
namespace Command\Order;

use Dddml\Command\CommandInterface;
use Dddml\Command\CommandTrait;
use Dddml\Command\RoutesTrait;
use Entity\Order\Order as OrderEntity;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

class OrderCommand extends OrderEntity implements CommandInterface
{
    use CommandTrait, IsPropertyRemovedTrait, EmbeddedCommandTrait, RoutesTrait;

    protected function getRoutes()
    {
        if (!$this->routes) {
            $this->routes = new RouteCollection();

            $route = new Route('Orders/{id}');
            $this->routes->add(CommandInterface::COMMAND_CREATE, $route);

            $route = new Route('Orders/{id}');
            $this->routes->add(CommandInterface::COMMAND_MERGE_PATCH, $route);

            $route = new Route('Orders/{id}');
            $this->routes->add(CommandInterface::COMMAND_DELETE, $route);
        }

        return $this->routes;
    }
}
