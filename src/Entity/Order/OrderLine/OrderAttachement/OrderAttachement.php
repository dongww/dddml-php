<?php
/**
 * User: dongww
 * Date: 2016/6/6
 * Time: 19:15
 */
namespace Entity\Order\OrderLine\OrderAttachement;

use Dddml\BaseEntity;
use JMS\Serializer\Annotation\Type;

class OrderAttachement extends BaseEntity
{
    use OrderAttachementFieldsTrait;
}
