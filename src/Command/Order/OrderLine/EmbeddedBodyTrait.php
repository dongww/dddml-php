<?php
/**
 * User: dongww
 * Date: 2016/6/6
 * Time: 20:42
 */
namespace Command\Order\OrderLine;

use Command\Order\OrderLine\OrderAttachement\OrderAttachementCommandBody;
use JMS\Serializer\Annotation\Type;

trait EmbeddedBodyTrait
{
    /**
     * @Type("array<Command\Order\OrderLine\OrderAttachement\OrderAttachementCommandBody>")
     *
     * @var OrderAttachementCommandBody[]
     */
    private $orderAttachements;

    /**
     * @return OrderAttachementCommandBody[]
     */
    public function getOrderAttachements()
    {
        return $this->orderAttachements;
    }

    /**
     * @param OrderAttachementCommandBody[] $orderAttachements
     */
    public function setOrderAttachements(array $orderAttachements)
    {
        $this->orderAttachements = $orderAttachements;
    }
}
