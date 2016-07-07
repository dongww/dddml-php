<?php
/**
 * User: dongww
 * Date: 2016/6/6
 * Time: 20:42
 */
namespace Command\Order;

use Command\Order\OrderLine\OrderLineCommand;
use JMS\Serializer\Annotation\Type;

trait EmbeddedCommandTrait
{
    /**
     * @Type("array<Command\Order\OrderLine\OrderLine>")
     *
     * @var OrderLineCommand[]
     */
    private $orderLines;

    /**
     * @return OrderLineCommand[]
     */
    public function getOrderLines()
    {
        return $this->orderLines;
    }

    /**
     * @param OrderLineCommand[] $orderLines
     */
    public function setOrderLines(array $orderLines)
    {
        $this->orderLines = $orderLines;
    }

    /**
     * @param OrderLineCommand $orderLine
     */
    public function addOrderLine(OrderLineCommand $orderLine)
    {
        $this->orderLines[] = $orderLine;
    }
}
