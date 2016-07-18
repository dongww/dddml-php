<?php
/**
 * User: dongww
 * Date: 2016/7/9
 * Time: 14:27
 */
namespace Command\Role;

use Dddml\Executor\Http\CommandExecutor;
use Dddml\Executor\Http\CommandRequestInterface;
use Dddml\Routing\RouteTrait;
use Symfony\Component\Routing\Route;

class RoleDeleteCommandRequest implements CommandRequestInterface
{
    use RouteTrait;

    /**
     * @var RoleCommand
     */
    private $command;

    public function __construct()
    {
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
