<?php
/**
 * User: dongww
 * Date: 2016/7/13
 * Time: 14:51
 */
namespace Dddml\Serializer\Handler;

use Dddml\Serializer\Type\Long;
use JMS\Serializer\Context;
use JMS\Serializer\GraphNavigator;
use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\JsonDeserializationVisitor;
use JMS\Serializer\JsonSerializationVisitor;

class LongHandler implements SubscribingHandlerInterface
{
    public static function getSubscribingMethods()
    {
        return [
            [
                'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
                'format'    => 'json',
                'type'      => 'Dddml\Serializer\Type\Long',
                'method'    => 'serializeLongToJson',
            ],
            [
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format'    => 'json',
                'type'      => 'Dddml\Serializer\Type\Long',
                'method'    => 'deserializeLongToJson',
            ],
        ];
    }

    public function serializeLongToJson(JsonSerializationVisitor $visitor, Long $long, array $type, Context $context)
    {
        return $long->getValue();
    }

    public function deserializeLongToJson(JsonDeserializationVisitor $visitor, $data, array $type)
    {
        $long = new Long();
        $long->setValue($data);

        return $long;
    }
}