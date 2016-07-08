<?php
/**
 * User: dongww
 * Date: 2016/7/8
 * Time: 16:44
 */
namespace Command\Order\OrderLine;

use Dddml\Command\CommandBodyInterface;
use Dddml\Command\CommandTrait;
use Entity\Order\OrderLine\OrderLineFieldsTrait;

class OrderLineCommandBody implements CommandBodyInterface
{
    use OrderLineFieldsTrait, CommandTrait, IsPropertyRemovedTrait, EmbeddedBodyTrait;
}
