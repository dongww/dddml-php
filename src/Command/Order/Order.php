<?php
/**
 * User: dongww
 * Date: 2016/6/6
 * Time: 20:20
 */

namespace Command\Order;

use Dddml\Command\CommandTrait;
use Entity\Order\Order as OrderEntity;
use JMS\Serializer\Annotation\Type;

class Order extends OrderEntity
{
    use CommandTrait;
    use IsPropertyRemovedTrait;
    use EmbeddedCommandTrait;

    public function __construct($commandType)
    {
        $this->setCommandType($commandType);
    }
}