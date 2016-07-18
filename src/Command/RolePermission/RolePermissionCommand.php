<?php
/**
 * User: dongww
 * Date: 2016/7/9
 * Time: 15:42
 */
namespace Command\RolePermission;

use Dddml\Command\CommandInterface;
use Dddml\Command\CommandTrait;
use Entity\RolePermission\RolePermissionFieldsTrait;

class RolePermissionCommand implements CommandInterface
{
    use RolePermissionFieldsTrait, CommandTrait, IsPropertyRemovedTrait;
}
