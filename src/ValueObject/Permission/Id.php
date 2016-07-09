<?php
/**
 * User: dongww
 * Date: 2016/7/9
 * Time: 15:27
 */
namespace ValueObject\Permission;

use JMS\Serializer\Annotation\Type;

class Id
{
    /**
     * @Type("string")
     *
     * @var string
     */
    private $roleId;

    /**
     * @Type("string")
     *
     * @var string
     */
    private $permissionId;

    /**
     * @return string
     */
    public function getRoleId()
    {
        return $this->roleId;
    }

    /**
     * @param string $roleId
     */
    public function setRoleId($roleId)
    {
        $this->roleId = $roleId;
    }

    /**
     * @return string
     */
    public function getPermissionId()
    {
        return $this->permissionId;
    }

    /**
     * @param string $permissionId
     */
    public function setPermissionId($permissionId)
    {
        $this->permissionId = $permissionId;
    }
}
