<?php
/**
 * User: dongww
 * Date: 2016/7/7
 * Time: 19:03
 */
namespace Entity\Order;

use Dddml\StateTrait;
use JMS\Serializer\Annotation\Type;

trait OrderFieldsTrait
{
    use StateTrait;

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
}
