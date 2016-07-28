<?php
/**
 * User: dongww
 * Date: 2016/7/9
 * Time: 14:27
 */
namespace Command\Role;

use Dddml\Executor\Http\AbstractCommandRequest;
use Dddml\Executor\Http\CommandExecutor;
use Dddml\Routing\RouteTrait;
use Symfony\Component\Routing\Route;

class RoleDeleteCommandRequest extends AbstractCommandRequest
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

        $this->route = new Route('Roles/{id}');
    }

    public function getMethod()
    {
        return CommandExecutor::METHOD_DELETE;
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
