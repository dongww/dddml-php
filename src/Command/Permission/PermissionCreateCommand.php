<?php
/**
 * User: dongww
 * Date: 2016/7/9
 * Time: 15:13
 */
namespace Command\Permission;

use Dddml\Command\CommandExecutor;
use Dddml\Command\CommandRequestInterface;
use Dddml\Routing\RouteTrait;
use Symfony\Component\Routing\Route;

class PermissionCreateCommandRequest implements CommandRequestInterface
{
    use RouteTrait;

    /**
     * @var PermissionCommand
     */
    private $body;

    public function __construct()
    {
        $body = $this->getBody();
        $body->setCommandType(static::COMMAND_CREATE);

        $this->route = new Route('Permissions/{id}');
    }

    public function getMethod()
    {
        return CommandExecutor::METHOD_PUT;
    }

    /**
     * @return PermissionCommand
     */
    public function getBody()
    {
        if (!$this->body) {
            $this->body = new PermissionCommand();
        }

        return $this->body;
    }
}
