<?php
/**
 * User: dongww
 * Date: 2016/6/28
 * Time: 13:52
 */
namespace Dddml\Command;

use Symfony\Component\Routing\Generator\UrlGenerator;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

/**
 * 命令执行相关路由的 Trait
 *
 * @package Dddml\Command
 */
trait RoutesTrait
{
    /**
     * 命令的路由集合
     *
     * @var  RouteCollection
     */
    protected $routes;

    /**
     * 获取命令对应的 URL
     *
     * @param string $type       命令的类型
     * @param string $baseUri    基础网址，一般是域名加上 API 的主路径
     * @param array  $parameters 命令路径中所需要的参数，例如 /Orders/{id}，需要传入 id 的值
     *
     * @return string
     */
    public function getUrl($type, $baseUri, array $parameters = [])
    {
        $context = new RequestContext($baseUri);

        $generator = new UrlGenerator($this->getRoutes(), $context);

        return $generator->generate($type, $parameters);
    }

    /**
     * 获取命令执行相关路由
     *
     * @return RouteCollection
     */
    protected function getRoutes()
    {
        if (!$this->routes) {
            $this->routes = new RouteCollection();

            $route = new Route('/Orders/{id}');
            $this->routes->add(CommandInterface::COMMAND_CREATE, $route);

            $route = new Route('/Orders/{id}');
            $this->routes->add(CommandInterface::COMMAND_MERGE_PATCH, $route);

            $route = new Route('/Orders/{id}');
            $this->routes->add(CommandInterface::COMMAND_DELETE, $route);
        }

        return $this->routes;
    }
}
