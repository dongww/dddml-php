<?php
/**
 * User: dongww
 * Date: 2016/7/18
 * Time: 17:55
 */
namespace Dddml\Serializer\Type;

class Money
{
    /** @var  string */
    private $amount;

    /** @var  string */
    private $currency;

    /**
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param string $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }
}