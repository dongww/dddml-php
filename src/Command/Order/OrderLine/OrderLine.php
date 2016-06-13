<?php
/**
 * User: dongww
 * Date: 2016/6/6
 * Time: 20:59
 */

namespace Command\Order\OrderLine;

use Dddml\Command\CommandTrait;
use Entity\Order\OrderLine\OrderLine as OrderLineEntity;
use JMS\Serializer\Annotation\Type;

class OrderLine extends OrderLineEntity
{
    use CommandTrait;
    use IsPropertyRemovedTrait;
    use EmbeddedCommandTrait;

    public function __construct($commandType)
    {
        $this->setCommandType($commandType);
    }
}