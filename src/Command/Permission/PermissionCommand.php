<?php
/**
 * User: dongww
 * Date: 2016/7/9
 * Time: 15:12
 */
namespace Command\Permission;

use Dddml\Command\CommandInterface;
use Dddml\Command\CommandTrait;
use Entity\Permission\PermissionFieldsTrait;

class PermissionCommand implements CommandInterface
{
    use PermissionFieldsTrait, CommandTrait, IsPropertyRemovedTrait;
}
