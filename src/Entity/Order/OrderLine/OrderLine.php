<?php
/**
 * User: dongww
 * Date: 2016/6/6
 * Time: 19:00
 */
namespace Entity\Order\OrderLine;

use Dddml\StateTrait;
use JMS\Serializer\Annotation\Type;

class OrderLine
{
    use StateTrait, OrderLineFieldsTrait, OrderLineEmbeddedTrait;
}
