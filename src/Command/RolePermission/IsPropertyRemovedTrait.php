<?php
/**
 * User: dongww
 * Date: 2016/7/9
 * Time: 15:41
 */
namespace Command\RolePermission;

use JMS\Serializer\Annotation\Type;

trait IsPropertyRemovedTrait
{
    /**
     * @Type("boolean")
     *
     * @var bool
     */
    private $isPropertyActiveRemoved;
}
