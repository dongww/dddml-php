<?php
/**
 * User: dongww
 * Date: 2016/7/9
 * Time: 14:18
 */
namespace Command\Role;

use Dddml\Http\CommandRequestInterface;
use Dddml\Http\Executor\CommandExecutor;
use Dddml\Routing\RouteTrait;
use Symfony\Component\Routing\Route;

class RoleMergePatchCommandRequest implements CommandRequestInterface
{
    use RouteTrait;

    /**
     * @var RoleCommand
     */
    private $command;

    public function __construct()
    {
        $body = $this->getCommand();
        $body->setCommandType(static::COMMAND_MERGE_PATCH);

        $this->route = new Route('Roles/{id}');
    }

    public function getMethod()
    {
        return CommandExecutor::METHOD_PATCH;
    }

    /**
     * @return RoleCommand
     */
    public function getCommand()
    {
        if (!$this->command) {
            $this->command = new RoleCommand();
        }

        return $this->command;
    }
}
