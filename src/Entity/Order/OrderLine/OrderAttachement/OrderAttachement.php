<?php
/**
 * User: dongww
 * Date: 2016/6/6
 * Time: 19:15
 */
namespace Entity\Order\OrderLine\OrderAttachement;

use Dddml\BaseEntity;
use JMS\Serializer\Annotation\Type;

class OrderAttachement extends BaseEntity
{
    /**
     * @Type("string")
     */
    private $id;

    /**
     * @Type("string")
     */
    private $attachementTypeName;

    /**
     * @Type("string")
     */
    private $attachementUrl;

    /**
     * @Type("integer")
     */
    private $attachementTypeId;

    /**
     * @Type("string")
     */
    private $orderId;

    /**
     * @Type("string")
     */
    private $orderLineId;

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
    public function getAttachementTypeName()
    {
        return $this->attachementTypeName;
    }

    /**
     * @param mixed $attachementTypeName
     */
    public function setAttachementTypeName($attachementTypeName)
    {
        $this->attachementTypeName = $attachementTypeName;
    }

    /**
     * @return mixed
     */
    public function getAttachementUrl()
    {
        return $this->attachementUrl;
    }

    /**
     * @param mixed $attachementUrl
     */
    public function setAttachementUrl($attachementUrl)
    {
        $this->attachementUrl = $attachementUrl;
    }

    /**
     * @return mixed
     */
    public function getAttachementTypeId()
    {
        return $this->attachementTypeId;
    }

    /**
     * @param mixed $attachementTypeId
     */
    public function setAttachementTypeId($attachementTypeId)
    {
        $this->attachementTypeId = $attachementTypeId;
    }

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @param mixed $orderId
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    /**
     * @return mixed
     */
    public function getOrderLineId()
    {
        return $this->orderLineId;
    }

    /**
     * @param mixed $orderLineId
     */
    public function setOrderLineId($orderLineId)
    {
        $this->orderLineId = $orderLineId;
    }
}
