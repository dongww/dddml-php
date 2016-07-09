<?php
/**
 * User: dongww
 * Date: 2016/7/9
 * Time: 15:03
 */
namespace Entity\Permission;

use Dddml\StateTrait;
use JMS\Serializer\Annotation\Type;

trait PermissionFieldsTrait
{
    use StateTrait;

    /**
     * @Type("string")
     *
     * @var string
     */
    private $permissionId;

    /**
     * @Type("string")
     *
     * @var string
     */
    private $name;

    /**
     * @Type("string")
     *
     * @var string
     */
    private $parentPermissionId;

    /**
     * @Type("string")
     *
     * @var string
     */
    private $description;

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

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getParentPermissionId()
    {
        return $this->parentPermissionId;
    }

    /**
     * @param string $parentPermissionId
     */
    public function setParentPermissionId($parentPermissionId)
    {
        $this->parentPermissionId = $parentPermissionId;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
}
