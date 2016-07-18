<?php
/**
 * User: dongww
 * Date: 2016/7/9
 * Time: 15:21
 */
namespace Command\Permission;

use Dddml\Command\CommandExecutor;
use Dddml\Command\CommandRequestInterface;
use Dddml\Routing\RouteTrait;
use Symfony\Component\Routing\Route;

class PermissionDeleteCommandRequest implements CommandRequestInterface
{
    use RouteTrait;

    public function __construct()
    {
        $this->route = new Route('Permissions/{id}');
    }

    public function getMethod()
    {
        return CommandExecutor::METHOD_DELETE;
    }

    /**
     * @return null
     */
    public function getBody()
    {
        return null;
    }
}
