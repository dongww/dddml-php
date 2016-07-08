<?php
/**
 * User: dongww
 * Date: 2016/6/6
 * Time: 20:42
 */
namespace Command\Order;

use Command\Order\OrderLine\OrderLineCommand;
use Command\Order\OrderLine\OrderLineCreateCommand;
use JMS\Serializer\Annotation\Type;

trait EmbeddedCommandTrait
{
    /**
     * @Type("array<Command\Order\OrderLine\OrderLineCreateCommand>")
     *
     * @var OrderLineCreateCommand[]
     */
    private $orderLines;

    /**
     * @return OrderLineCreateCommand[]
     */
    public function getOrderLines()
    {
        return $this->orderLines;
    }

    /**
     * @param OrderLineCreateCommand[] $orderLines
     */
    public function setOrderLines(array $orderLines)
    {
        $this->orderLines = $orderLines;
    }

    /**
     * @param OrderLineCreateCommand $orderLine
     */
    public function addOrderLine(OrderLineCreateCommand $orderLine)
    {
        $this->orderLines[] = $orderLine;
    }
}
