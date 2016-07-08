<?php
/**
 * User: dongww
 * Date: 2016/7/8
 * Time: 11:05
 */
namespace Command\Order\OrderLine;

use Dddml\Command\CommandInterface;
use Dddml\Command\CommandTrait;
use Dddml\Routing\RouteTrait;
use Entity\Order\OrderLine\OrderLineFieldsTrait;

class OrderLineCreateCommand implements CommandInterface
{
    use OrderLineFieldsTrait, CommandTrait, IsPropertyRemovedTrait, RouteTrait;

    public function getMethod()
    {
        return '';
    }
}
