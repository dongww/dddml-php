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
    private $Id;

    /**
     * @Type("string")
     */
    private $AttachementTypeName;

    /**
     * @Type("string")
     */
    private $AttachementUrl;

    /**
     * @Type("integer")
     */
    private $AttachementTypeId;

    /**
     * @Type("string")
     */
    private $OrderId;

    /**
     * @Type("string")
     */
    private $OrderLineId;

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
    public function getAttachementTypeName()
    {
        return $this->AttachementTypeName;
    }

    /**
     * @param mixed $AttachementTypeName
     */
    public function setAttachementTypeName($AttachementTypeName)
    {
        $this->AttachementTypeName = $AttachementTypeName;
    }

    /**
     * @return mixed
     */
    public function getAttachementUrl()
    {
        return $this->AttachementUrl;
    }

    /**
     * @param mixed $AttachementUrl
     */
    public function setAttachementUrl($AttachementUrl)
    {
        $this->AttachementUrl = $AttachementUrl;
    }

    /**
     * @return mixed
     */
    public function getAttachementTypeId()
    {
        return $this->AttachementTypeId;
    }

    /**
     * @param mixed $AttachementTypeId
     */
    public function setAttachementTypeId($AttachementTypeId)
    {
        $this->AttachementTypeId = $AttachementTypeId;
    }

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->OrderId;
    }

    /**
     * @param mixed $OrderId
     */
    public function setOrderId($OrderId)
    {
        $this->OrderId = $OrderId;
    }

    /**
     * @return mixed
     */
    public function getOrderLineId()
    {
        return $this->OrderLineId;
    }

    /**
     * @param mixed $OrderLineId
     */
    public function setOrderLineId($OrderLineId)
    {
        $this->OrderLineId = $OrderLineId;
    }
}
