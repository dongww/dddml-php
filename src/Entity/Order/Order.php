<?php
/**
 * User: dongww
 * Date: 2016/6/6
 * Time: 18:53
 */
namespace Entity\Order;

use Dddml\BaseEntity;
use JMS\Serializer\Annotation\Type;

class Order extends BaseEntity
{
    use OrderFieldsTrait;
}
