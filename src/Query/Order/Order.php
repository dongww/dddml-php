<?php
/**
 * User: dongww
 * Date: 2016/6/29
 * Time: 20:11
 */
namespace Query\Order;

use Dddml\Query\QueryInterface;
use Dddml\Query\QueryTrait;
use Dddml\Query\RoutesTrait;

class Order implements QueryInterface
{
    use QueryTrait, RoutesTrait, FilteringFieldsTrait {
        RoutesTrait::getRoutes as baseGetRoutes;
    }

    protected function getRoutes()
    {
        $routes = $this->baseGetRoutes();

        //以下可以添加自定义路由

        return $routes;
    }
}