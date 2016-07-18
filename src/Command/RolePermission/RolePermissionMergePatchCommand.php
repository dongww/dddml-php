<?php
/**
 * User: dongww
 * Date: 2016/7/9
 * Time: 15:45
 */
namespace Command\RolePermission;

use Dddml\Command\CommandExecutor;
use Dddml\Command\CommandRequestInterface;
use Dddml\Routing\RouteTrait;
use Symfony\Component\Routing\Route;

class RolePermissionMergePatchCommandRequest implements CommandRequestInterface
{
    use RouteTrait;

    /**
     * @var RolePermissionCommand
     */
    private $body;

    public function __construct()
    {
        $body = $this->getBody();
        $body->setCommandType(static::COMMAND_MERGE_PATCH);

        $this->route = new Route('RolePermissions/{id}');
    }

    public function getMethod()
    {
        return CommandExecutor::METHOD_PATCH;
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
