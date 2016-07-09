<?php
/**
 * User: dongww
 * Date: 2016/7/9
 * Time: 15:30
 */
namespace Entity\RolePermission;

use Dddml\StateTrait;
use JMS\Serializer\Annotation\Type;
use ValueObject\Permission\Id;

trait RolePermissionFieldsTrait
{
    use StateTrait;

    /**
     * @Type("ValueObject\Permission\Id")
     *
     * @var Id
     */
    private $id;

    /**
     * @return Id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param Id $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}
