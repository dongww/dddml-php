<?php
/**
 * User: dongww
 * Date: 2016/7/8
 * Time: 16:54
 */
namespace Command\Order\OrderLine\OrderAttachement;

use Dddml\Command\CommandBodyInterface;
use Dddml\Command\CommandTrait;
use Entity\Order\OrderLine\OrderAttachement\OrderAttachementFieldsTrait;

class OrderAttachementCommandBody implements CommandBodyInterface
{
    use OrderAttachementFieldsTrait, CommandTrait, IsPropertyRemovedTrait;
}
