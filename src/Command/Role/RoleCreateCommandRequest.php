<?php
/**
 * User: dongww
 * Date: 2016/7/7
 * Time: 19:20
 */
namespace Command\Role;

use Dddml\Http\CommandRequestInterface;
use Dddml\Http\Executor\CommandExecutor;
use Dddml\Routing\RouteTrait;
use Symfony\Component\Routing\Route;

class RoleCreateCommandRequest implements CommandRequestInterface
{
    use RouteTrait;

    /**
     * @var RoleCommand
     */
    private $command;

    public function __construct()
    {
        $body = $this->getCommand();
        $body->setCommandType(static::COMMAND_CREATE);

        $this->route = new Route('Roles/{id}');
    }

    public function getMethod()
    {
        return CommandExecutor::METHOD_PUT;
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