<?php
/**
 * User: dongww
 * Date: 2016/7/9
 * Time: 15:43
 */
namespace Command\RolePermission;

use Dddml\Command\CommandExecutor;
use Dddml\Command\CommandRequestInterface;
use Dddml\Routing\RouteTrait;
use Symfony\Component\Routing\Route;

class RolePermissionCreateCommandRequest implements CommandRequestInterface
{
    use RouteTrait;

    /**
     * @var RolePermissionCommand
     */
    private $body;

    public function __construct()
    {
        $body = $this->getBody();
        $body->setCommandType(static::COMMAND_CREATE);

        $this->route = new Route('RolePermissions/{id}');
    }

    public function getMethod()
    {
        return CommandExecutor::METHOD_PUT;
    }

    /**
     * @return RolePermissionCommand
     */
    public function getBody()
    {
        if (!$this->body) {
            $this->body = new RolePermissionCommand();
        }

        return $this->body;
    }
}
