<?php
/**
 * User: dongww
 * Date: 2016/7/7
 * Time: 19:20
 */
namespace Command\Role;

use Dddml\Command\CommandExecutor;
use Dddml\Command\CommandInterface;
use Dddml\Routing\RouteTrait;
use Symfony\Component\Routing\Route;

class RoleCreateCommand implements CommandInterface
{
    use RouteTrait;

    /**
     * @var RoleCommandBody
     */
    private $body;

    public function __construct()
    {
        $body = $this->getBody();
        $body->setCommandType(static::COMMAND_CREATE);

        $this->route = new Route('Roles/{id}');
    }

    public function getMethod()
    {
        return CommandExecutor::METHOD_PUT;
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