<?php
/**
 * User: dongww
 * Date: 2016/6/6
 * Time: 18:53
 */

namespace Entity\Order;

use Entity\Order\OrderLine\OrderLine;
use JMS\Serializer\Annotation\Type;

class Order
{
    /**
     * @Type("string")
     */
    private $Id;

    /**
     * @Type("string")
     */
    private $OrderNo;

    /**
     * @Type("integer")
     */
    private $Status;

    /**
     * @Type("string")
     */
    private $Description;

    /**
     * @Type("array<Entity\Order\OrderLine\OrderLine>")
     * @var  OrderLine[]
     */
    private $OrderLines;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param mixed $Id
     */
    public function setId($Id)
    {
        $this->Id = $Id;
    }

    /**
     * @return mixed
     */
    public function getOrderNo()
    {
        return $this->OrderNo;
    }

    /**
     * @param mixed $OrderNo
     */
    public function setOrderNo($OrderNo)
    {
        $this->OrderNo = $OrderNo;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param mixed $Status
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param mixed $Description
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
    }

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
}