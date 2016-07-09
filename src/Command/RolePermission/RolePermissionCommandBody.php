<?php
/**
 * User: dongww
 * Date: 2016/7/9
 * Time: 15:42
 */
namespace Command\RolePermission;

use Dddml\Command\CommandBodyInterface;
use Dddml\Command\CommandTrait;
use Entity\RolePermission\RolePermissionFieldsTrait;

class RolePermissionCommandBody implements CommandBodyInterface
{
    use RolePermissionFieldsTrait, CommandTrait, IsPropertyRemovedTrait;
}
