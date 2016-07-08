<?php
/**
 * User: dongww
 * Date: 2016/7/7
 * Time: 20:27
 */
namespace Dddml\Routing;

use Symfony\Component\Routing\Generator\UrlGenerator as BaseGenerator;
use Symfony\Component\Routing\Route;

class UrlGenerator extends BaseGenerator
{
    public function generateByRoute(Route $route, $parameters = array())
    {
        $compiledRoute = $route->compile();

        return $this->doGenerate(
            $compiledRoute->getVariables(),
            $route->getDefaults(),
            $route->getRequirements(),
            $compiledRoute->getTokens(),
            $parameters,
            '',
            self::ABSOLUTE_PATH,
            $compiledRoute->getHostTokens(),
            $route->getSchemes());
    }
}
