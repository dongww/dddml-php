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

trait RoutesTrait
{
    /** @var  RouteCollection */
    protected $routes;

    /**
     * @param       $type
     * @param       $baseUri
     * @param array $parameters
     *
     * @return string
     */
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
            $this->routes->add(CommandInterface::COMMAND_CREATE, $route);

            $route = new Route('/Orders/{id}');
            $this->routes->add(CommandInterface::COMMAND_MERGE_PATCH, $route);

            $route = new Route('/Orders/{id}');
            $this->routes->add(CommandInterface::COMMAND_DELETE, $route);
        }

        return $this->routes;
    }
}
