<?php
/**
 * User: dongww
 * Date: 2016/7/7
 * Time: 14:47
 */
namespace Dddml\Serializer\Naming;

use JMS\Serializer\Metadata\PropertyMetadata;
use JMS\Serializer\Naming\PropertyNamingStrategyInterface;

class DddmlStrategy implements PropertyNamingStrategyInterface
{
    public function translateName(PropertyMetadata $property)
    {
        return ucwords($property->name);
    }
}
