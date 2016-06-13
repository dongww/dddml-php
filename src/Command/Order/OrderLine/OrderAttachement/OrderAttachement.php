<?php
/**
 * User: dongww
 * Date: 2016/6/7
 * Time: 19:48
 */

namespace Command\Order\OrderLine\OrderAttachement;

use Dddml\Command\CommandTrait;
use Entity\Order\OrderLine\OrderAttachement\OrderAttachement as OrderAttachementEntity;
use JMS\Serializer\Annotation\Type;


class OrderAttachement extends OrderAttachementEntity
{
    use CommandTrait;
    use IsPropertyRemovedTrait;

    public function __construct($commandType)
    {
        $this->setCommandType($commandType);
    }
}