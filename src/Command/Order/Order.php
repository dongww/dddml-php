<?php
/**
 * User: dongww
 * Date: 2016/6/6
 * Time: 20:20
 */
namespace Command\Order;

use Dddml\Command\CommandInterface;
use Dddml\Command\CommandTrait;
use Entity\Order\Order as OrderEntity;
use JMS\Serializer\Annotation\Type;

class Order extends OrderEntity implements CommandInterface
{
    use CommandTrait;
    use IsPropertyRemovedTrait;
    use EmbeddedCommandTrait;
}
