<?php
/**
 * User: dongww
 * Date: 2016/7/9
 * Time: 13:20
 */
namespace Command\Role;

use Dddml\Command\CommandInterface;
use Dddml\Command\CommandTrait;
use Entity\Role\RoleFieldsTrait;

class RoleCommand implements CommandInterface
{
    use RoleFieldsTrait, CommandTrait, IsPropertyRemovedTrait;
}
