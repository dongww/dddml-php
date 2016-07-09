<?php
/**
 * User: dongww
 * Date: 2016/7/9
 * Time: 15:19
 */
namespace Command\Permission;

use Dddml\Command\CommandExecutor;
use Dddml\Command\CommandInterface;
use Dddml\Routing\RouteTrait;
use Symfony\Component\Routing\Route;

class PermissionMergePatchCommand implements CommandInterface
{
    use RouteTrait;

    /**
     * @var PermissionCommandBody
     */
    private $body;

    public function __construct()
    {
        $body = $this->getBody();
        $body->setCommandType(static::COMMAND_MERGE_PATCH);

        $this->route = new Route('Permissions/{id}');
    }

    public function getMethod()
    {
        return CommandExecutor::METHOD_PATCH;
    }

    /**
     * @return PermissionCommandBody
     */
    public function getBody()
    {
        if (!$this->body) {
            $this->body = new PermissionCommandBody();
        }

        return $this->body;
    }
}
