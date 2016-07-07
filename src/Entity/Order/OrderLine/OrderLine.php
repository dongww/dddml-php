<?php
/**
 * User: dongww
 * Date: 2016/6/6
 * Time: 19:00
 */
namespace Entity\Order\OrderLine;

use Dddml\BaseEntity;
use Entity\Order\OrderFieldsTrait;
use JMS\Serializer\Annotation\Type;

class OrderLine extends BaseEntity
{
    use OrderLineFieldsTrait;
}
