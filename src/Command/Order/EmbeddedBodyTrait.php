<?php
/**
 * User: dongww
 * Date: 2016/6/6
 * Time: 20:42
 */
namespace Command\Order;

use Command\Order\OrderLine\OrderLineCommandBody;
use JMS\Serializer\Annotation\Type;

trait EmbeddedBodyTrait
{
    /**
     * @Type("array<Command\Order\OrderLine\OrderLineCommandBody>")
     *
     * @var OrderLineCommandBody[]
     */
    private $orderLines;

    /**
     * @return OrderLineCommandBody[]
     */
    public function getOrderLines()
    {
        return $this->orderLines;
    }

    /**
     * @param OrderLineCommandBody[] $orderLines
     */
    public function setOrderLines(array $orderLines)
    {
        $this->orderLines = $orderLines;
    }

    /**
     * @param OrderLineCommandBody $orderLine
     */
    public function addOrderLine(OrderLineCommandBody $orderLine)
    {
        $this->orderLines[] = $orderLine;
    }
}
