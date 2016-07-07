<?php
/**
 * User: dongww
 * Date: 2016/6/6
 * Time: 18:53
 */
namespace Entity\Order;

use Dddml\BaseEntity;
use Entity\Order\OrderLine\OrderLine;
use JMS\Serializer\Annotation\Type;

class Order extends BaseEntity
{
    /**
     * @Type("string")
     */
    private $id;

    /**
     * @Type("string")
     */
    private $orderNo;

    /**
     * @Type("integer")
     */
    private $status;

    /**
     * @Type("string")
     */
    private $description;

    /**
     * @Type("array<Entity\Order\OrderLine\OrderLine>")
     * @var  OrderLine[]
     */
    private $orderLines;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getOrderNo()
    {
        return $this->orderNo;
    }

    /**
     * @param mixed $orderNo
     */
    public function setOrderNo($orderNo)
    {
        $this->orderNo = $orderNo;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

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
