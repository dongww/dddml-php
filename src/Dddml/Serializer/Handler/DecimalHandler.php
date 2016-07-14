<?php
/**
 * User: dongww
 * Date: 2016/7/13
 * Time: 14:51
 */
namespace Dddml\Serializer\Handler;

use Dddml\Serializer\Type\Decimal;
use Dddml\Serializer\Type\Long;
use JMS\Serializer\Context;
use JMS\Serializer\GraphNavigator;
use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\JsonDeserializationVisitor;
use JMS\Serializer\JsonSerializationVisitor;

class DecimalHandler implements SubscribingHandlerInterface
{
    public static function getSubscribingMethods()
    {
        return [
            [
                'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
                'format'    => 'json',
                'type'      => 'Dddml\Serializer\Type\Long',
                'method'    => 'serializeDecimalToJson',
            ],
            [
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format'    => 'json',
                'type'      => 'Dddml\Serializer\Type\Long',
                'method'    => 'deserializeDecimalToJson',
            ],
        ];
    }

    public function serializeDecimalToJson(JsonSerializationVisitor $visitor, Long $decimal, array $type, Context $context)
    {
        return $decimal->getValue();
    }

    public function deserializeDecimalToJson(JsonDeserializationVisitor $visitor, $data, array $type)
    {
        $decimal = new Decimal();
        $decimal->setValue($data);

        return $decimal;
    }
}