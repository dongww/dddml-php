<?php
/**
 * User: dongww
 * Date: 2016/7/9
 * Time: 14:27
 */
namespace Command\Role;

use Dddml\Command\CommandBodyInterface;
use Dddml\Command\CommandExecutor;
use Dddml\Command\CommandInterface;
use Dddml\Routing\RouteTrait;
use Symfony\Component\Routing\Route;

class RoleDeleteCommand implements CommandInterface
{
    use RouteTrait;

    public function __construct()
    {
        $this->route = new Route('Roles/{id}');
    }

    public function getMethod()
    {
        return CommandExecutor::METHOD_DELETE;
    }

    /**
     * @return CommandBodyInterface
     */
    public function getBody()
    {
        return null;
    }
}
