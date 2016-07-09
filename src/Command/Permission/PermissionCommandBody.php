<?php
/**
 * User: dongww
 * Date: 2016/7/9
 * Time: 15:12
 */
namespace Command\Permission;

use Dddml\Command\CommandBodyInterface;
use Dddml\Command\CommandTrait;
use Entity\Permissions\PermissionFieldsTrait;

class PermissionCommandBody implements CommandBodyInterface
{
    use PermissionFieldsTrait, CommandTrait, IsPropertyRemovedTrait;
}
