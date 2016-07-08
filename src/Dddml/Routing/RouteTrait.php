<?php
/**
 * User: dongww
 * Date: 2016/6/28
 * Time: 13:52
 */
namespace Dddml\Routing;

use Symfony\Component\Routing\Route;

/**
 * 查询执行相关路由的 Trait
 *
 * @package Dddml\Routing
 */
trait RouteTrait
{
    /**
     * 查询的路由集合
     *
     * @var  Route
     */
    protected $route = null;

    /**
     * @return Route
     */
    public function getRoute()
    {
        return $this->route;
    }
}
