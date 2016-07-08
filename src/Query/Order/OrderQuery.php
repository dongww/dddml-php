<?php
/**
 * User: dongww
 * Date: 2016/6/29
 * Time: 20:11
 */
namespace Query\Order;

use Dddml\Query\QueryInterface;
use Dddml\Query\QueryTrait;
use Dddml\Query\RouteTrait;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

class OrderQuery implements QueryInterface
{
    use QueryTrait, RouteTrait, FilteringFieldsTrait;

    protected function getRoutes()
    {
        if (!$this->routes) {
            $this->routes = new RouteCollection();

            $route = new Route('Orders/{id}');
            $this->routes->add(QueryInterface::QUERY_SINGLE, $route);

            $route = new Route('Orders');
            $this->routes->add(QueryInterface::QUERY_LIST, $route);
        }

        return $this->routes;
    }
}
