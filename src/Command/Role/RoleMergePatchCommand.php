<?php
/**
 * User: dongww
 * Date: 2016/7/9
 * Time: 14:18
 */
namespace Command\Role;

use Dddml\Command\CommandExecutor;
use Dddml\Command\CommandInterface;
use Dddml\Routing\RouteTrait;
use Symfony\Component\Routing\Route;

class RoleMergePatchCommand implements CommandInterface
{
    use RouteTrait;

    /**
     * @var RoleCommandBody
     */
    private $body;

    public function __construct()
    {
        $body = $this->getBody();
        $body->setCommandType(static::COMMAND_MERGE_PATCH);

        $this->route = new Route('Roles/{id}');
    }

    public function getMethod()
    {
        return CommandExecutor::METHOD_PATCH;
    }

    /**
     * @return RoleCommandBody
     */
    public function getBody()
    {
        if (!$this->body) {
            $this->body = new RoleCommandBody();
        }

        return $this->body;
    }
}
