<?php
/**
 * User: dongww
 * Date: 2016/6/6
 * Time: 20:42
 */
namespace Command\Order\OrderLine;

use Command\Order\OrderLine\OrderAttachement\OrderAttachementCommand;
use JMS\Serializer\Annotation\Type;

trait EmbeddedCommandTrait
{
    /**
     * @Type("array<Command\Order\OrderLine\OrderAttachement\OrderAttachement>")
     *
     * @var OrderAttachementCommand[]
     */
    private $orderAttachements;

    /**
     * @return OrderAttachementCommand[]
     */
    public function getOrderAttachements()
    {
        return $this->orderAttachements;
    }

    /**
     * @param OrderAttachementCommand[] $orderAttachements
     */
    public function setOrderAttachements(array $orderAttachements)
    {
        $this->orderAttachements = $orderAttachements;
    }
}
