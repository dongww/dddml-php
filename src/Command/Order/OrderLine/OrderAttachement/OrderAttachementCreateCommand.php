<?php
/**
 * User: dongww
 * Date: 2016/7/8
 * Time: 10:57
 */
namespace Command\Order\OrderLine\OrderAttachement;

use Dddml\Command\CommandInterface;
use Dddml\Command\CommandTrait;
use Dddml\Routing\RouteTrait;
use Entity\Order\OrderLine\OrderAttachement\OrderAttachementFieldsTrait;

class OrderAttachementCreateCommand implements CommandInterface
{
    use OrderAttachementFieldsTrait, CommandTrait, IsPropertyRemovedTrait, RouteTrait;

    public function getMethod()
    {
        return '';
    }
}
