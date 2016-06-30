<?php
/**
 * User: dongww
 * Date: 2016/6/28
 * Time: 13:52
 */
namespace Dddml\Query;

use Dddml\Command\CommandInterface;
use Symfony\Component\Routing\Generator\UrlGenerator;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

trait RoutesTrait
{
    /** @var  RouteCollection */
    protected $routes;

    public function getUrl($type, $baseUri, array $parameters = [])
    {
        $context = new RequestContext($baseUri);

        $generator = new UrlGenerator($this->getRoutes(), $context);

        return $generator->generate($type, $parameters);
    }

    protected function getRoutes()
    {
        if (!$this->routes) {
            $this->routes = new RouteCollection();

            $route = new Route('/Orders/{id}');
            $this->routes->add(QueryInterface::QUERY_SINGLE, $route);

            $route = new Route('/Orders');
            $this->routes->add(QueryInterface::QUERY_LIST, $route);
        }

        return $this->routes;
    }
}
