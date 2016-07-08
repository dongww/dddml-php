<?php
/**
 * User: dongww
 * Date: 2016/7/8
 * Time: 17:37
 */

namespace Entity\Order\OrderLine;


use Entity\Order\OrderLine\OrderAttachement\OrderAttachement;
use JMS\Serializer\Annotation\Type;

trait OrderLineEmbeddedTrait
{
    /**
     * @Type("array<Entity\Order\OrderLine\OrderAttachements\OrderAttachement>")
     * @var array
     */
    private $orderAttachements;
    
    /**
     * @return OrderAttachement[]
     */
    public function getOrderAttachements()
    {
        return $this->orderAttachements;
    }

    /**
     * @param OrderAttachement[] $orderAttachements
     */
    public function setOrderAttachements(array $orderAttachements)
    {
        $this->orderAttachements = $orderAttachements;
    }
}