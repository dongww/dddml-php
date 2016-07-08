<?php
/**
 * User: dongww
 * Date: 2016/7/8
 * Time: 13:23
 */
namespace Entity\Order;

use Entity\Order\OrderLine\OrderLine;
use JMS\Serializer\Annotation\Type;

trait OrderEmbeddedTrait
{
    /**
     * @Type("array<Entity\Order\OrderLine\OrderLine>")
     * @var  OrderLine[]
     */
    private $orderLines;

    /**
     * @return OrderLine[]
     */
    public function getOrderLines()
    {
        return $this->orderLines;
    }

    /**
     * @param OrderLine[] $orderLines
     */
    public function setOrderLines(array $orderLines)
    {
        $this->orderLines = $orderLines;
    }
}
