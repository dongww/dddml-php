<?php
/**
 * User: dongww
 * Date: 2016/7/8
 * Time: 16:40
 */
namespace Command\Order;

use Dddml\Command\CommandBodyInterface;
use Dddml\Command\CommandTrait;
use Entity\Order\OrderFieldsTrait;

class OrderCommandBody implements CommandBodyInterface
{
    use OrderFieldsTrait, CommandTrait, IsPropertyRemovedTrait, EmbeddedBodyTrait;
}