<?php
/**
 * User: dongww
 * Date: 2016/7/12
 * Time: 17:23
 */
namespace Dddml\Query;

use Dddml\Command\CommandExecutor;
use Dddml\Routing\RouteTrait;
use Symfony\Component\Routing\Route;

abstract class AbstractQuery implements QueryInterface
{
    use RouteTrait;

    protected $routePath = null;

    public function __construct()
    {
        if (!$this->routePath) {
            throw new \Exception('Route Path is Null.');
        }

        $this->route = new Route($this->routePath);
    }

    /**
     * 获取执行的 http 方法
     *
     * @return string
     */
    public function getMethod()
    {
        return CommandExecutor::METHOD_GET;
    }
}
