<?php
/**
 * User: dongww
 * Date: 2016/7/9
 * Time: 15:45
 */
namespace Command\RolePermission;

use Dddml\Command\CommandExecutor;
use Dddml\Command\CommandInterface;
use Dddml\Routing\RouteTrait;
use Symfony\Component\Routing\Route;

class RolePermissionMergePatchCommand implements CommandInterface
{
    use RouteTrait;

    /**
     * @var RolePermissionCommandBody
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
     * @return RolePermissionCommandBody
     */
    public function getBody()
    {
        if (!$this->body) {
            $this->body = new RolePermissionCommandBody();
        }

        return $this->body;
    }
}
