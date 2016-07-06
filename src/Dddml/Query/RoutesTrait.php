<?php
/**
 * User: dongww
 * Date: 2016/6/28
 * Time: 13:52
 */
namespace Dddml\Query;

use Symfony\Component\Routing\Generator\UrlGenerator;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\RouteCollection;

/**
 * 查询执行相关路由的 Trait
 *
 * @package Dddml\Query
 */
trait RoutesTrait
{
    /**
     * 查询的路由集合
     *
     * @var  RouteCollection
     */
    protected $routes;

    /**
     * 获取查询对应的 URL
     *
     * @param string $type       查询的类型
     * @param string $baseUri    基础网址，一般是域名加上 API 的主路径
     * @param array  $parameters 查询路径中所需要的参数，例如 /Orders/{id}，需要传入 id 的值
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
    abstract protected function getRoutes();
}
