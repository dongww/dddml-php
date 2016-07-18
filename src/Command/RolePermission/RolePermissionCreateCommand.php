<?php
/**
 * User: dongww
 * Date: 2016/7/9
 * Time: 15:43
 */
namespace Command\RolePermission;


use Dddml\Command\CommandRequestInterface;
use Dddml\Executor\Http\CommandExecutor;
use Dddml\Routing\RouteTrait;
use Symfony\Component\Routing\Route;

class RolePermissionCreateCommandRequest implements CommandRequestInterface
{
    use RouteTrait;

    /**
     * @var RolePermissionCommand
     */
    private $command;

    public function __construct()
    {
        $body = $this->getCommand();
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
    public function getCommand()
    {
        if (!$this->command) {
            $this->command = new RolePermissionCommand();
        }

        return $this->command;
    }
}
