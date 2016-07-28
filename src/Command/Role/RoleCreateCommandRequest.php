<?php
/**
 * User: dongww
 * Date: 2016/7/7
 * Time: 19:20
 */
namespace Command\Role;

use Dddml\Executor\Http\AbstractCommandRequest;
use Dddml\Executor\Http\CommandExecutor;
use Dddml\Routing\RouteTrait;
use Symfony\Component\Routing\Route;

class RoleCreateCommandRequest extends AbstractCommandRequest
{
    use RouteTrait;

    /**
     * @var RoleCommand
     */
    private $command;

    public static $commandType = 'Command\Role\RoleCommand';

    public function __construct(CommandExecutor $executor)
    {
        parent::__construct($executor);

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