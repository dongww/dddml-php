<?php
/**
 * User: dongww
 * Date: 2016/7/9
 * Time: 15:46
 */
namespace Command\RolePermission;

use Dddml\Command\CommandExecutor;
use Dddml\Command\CommandInterface;
use Dddml\Routing\RouteTrait;
use Symfony\Component\Routing\Route;

class RolePermissionDeleteCommand implements CommandInterface
{
    use RouteTrait;

    public function __construct()
    {
        $this->route = new Route('RolePermissions/{id}');
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
