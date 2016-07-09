<?php
/**
 * User: dongww
 * Date: 2016/6/6
 * Time: 18:53
 */
namespace Entity\Order;

use JMS\Serializer\Annotation\Type;

class Order
{
    use OrderFieldsTrait, OrderEmbeddedTrait;
}
