<?php
/**
 * User: dongww
 * Date: 2016/6/6
 * Time: 20:42
 */
namespace Command\Order\OrderLine;

use Command\Order\OrderLine\OrderAttachement\OrderAttachement;
use JMS\Serializer\Annotation\Type;

trait EmbeddedCommandTrait
{
    /**
     * @Type("array<Command\Order\OrderLine\OrderAttachement\OrderAttachement>")
     *
     * @var OrderAttachement[]
     */
    private $OrderAttachements;

    /**
     * @return OrderAttachement[]
     */
    public function getOrderAttachements()
    {
        return $this->OrderAttachements;
    }

    /**
     * @param OrderAttachement[] $OrderAttachements
     */
    public function setOrderAttachements(array $OrderAttachements)
    {
        $this->OrderAttachements = $OrderAttachements;
    }
}
