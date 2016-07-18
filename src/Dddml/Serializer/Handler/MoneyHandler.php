<?php
/**
 * User: dongww
 * Date: 2016/7/18
 * Time: 18:07
 */
namespace Dddml\Serializer\Handler;

use Dddml\Serializer\Type\Money;
use JMS\Serializer\Context;
use JMS\Serializer\GraphNavigator;
use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\JsonDeserializationVisitor;
use JMS\Serializer\JsonSerializationVisitor;

class MoneyHandler implements SubscribingHandlerInterface
{
    public static function getSubscribingMethods()
    {
        return [
            [
                'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
                'format'    => 'json',
                'type'      => 'Dddml\Serializer\Type\Money',
                'method'    => 'serializeMoneyToJson',
            ],
            [
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format'    => 'json',
                'type'      => 'Dddml\Serializer\Type\Money',
                'method'    => 'deserializeMoneyToJson',
            ],
        ];
    }

    public function serializeMoneyToJson(JsonSerializationVisitor $visitor, Money $money, array $type, Context $context)
    {
        $json = [
            'amount'   => $money->getAmount(),
            'currency' => $money->getCurrency(),
        ];

        return $json;
    }

    public function deserializeMoneyToJson(JsonDeserializationVisitor $visitor, $data, array $type)
    {
        $money = new Money();
        $money->setAmount($data['amount']);
        $money->setCurrency($data['currency']);

        return $money;
    }
}
