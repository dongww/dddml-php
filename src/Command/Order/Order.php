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

class Order extends OrderEntity implements CommandInterface
{
    use CommandTrait, IsPropertyRemovedTrait, EmbeddedCommandTrait, RoutesTrait {
        RoutesTrait::getRoutes as baseGetRoutes;
    }

    protected function getRoutes()
    {
        $routes = $this->baseGetRoutes();

        //以下可以添加自定义路由

        return $routes;
    }
}
