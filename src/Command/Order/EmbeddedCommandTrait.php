<?php
/**
 * User: dongww
 * Date: 2016/6/6
 * Time: 20:42
 */
namespace Command\Order;

use Command\Order\OrderLine\OrderLine;
use JMS\Serializer\Annotation\Type;

trait EmbeddedCommandTrait
{
    /**
     * @Type("array<Command\Order\OrderLine\OrderLine>")
     *
     * @var OrderLine[]
     */
    private $OrderLines;

    /**
     * @return OrderLine[]
     */
    public function getOrderLines()
    {
        return $this->OrderLines;
    }

    /**
     * @param OrderLine[] $OrderLines
     */
    public function setOrderLines(array $OrderLines)
    {
        $this->OrderLines = $OrderLines;
    }

    public function addOrderLine(OrderLine $orderLine)
    {
        $this->OrderLines[] = $orderLine;
    }
}
