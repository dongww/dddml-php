<?php
/**
 * User: dongww
 * Date: 2016/7/4
 * Time: 19:45
 */

namespace Dddml;

use JMS\Serializer\Annotation\Type;

class BaseEntity
{
    /**
     * @Type("integer")
     */
    protected $Version = 0;

    /**
     * @Type("boolean")
     */
    protected $Active;

    /**
     * @return int
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * @param int $Version
     */
    public function setVersion($Version)
    {
        $this->Version = $Version;
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * @param bool $Active
     */
    public function setActive($Active)
    {
        $this->Active = $Active;
    }
}