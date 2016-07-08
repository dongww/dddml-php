<?php
/**
 * User: dongww
 * Date: 2016/6/6
 * Time: 18:53
 */
namespace Entity\Order;

use Dddml\StateTrait;
use JMS\Serializer\Annotation\Type;

class Order
{
    use StateTrait, OrderFieldsTrait, OrderEmbeddedTrait;
}
