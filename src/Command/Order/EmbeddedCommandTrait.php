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
    private $OrderLines;

    /**
     * @return OrderLineCommand[]
     */
    public function getOrderLines()
    {
        return $this->OrderLines;
    }

    /**
     * @param OrderLineCommand[] $OrderLines
     */
    public function setOrderLines(array $OrderLines)
    {
        $this->OrderLines = $OrderLines;
    }

    /**
     * @param OrderLineCommand $orderLine
     */
    public function addOrderLine(OrderLineCommand $orderLine)
    {
        $this->OrderLines[] = $orderLine;
    }
}
