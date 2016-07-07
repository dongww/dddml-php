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
    protected $version = 0;

    /**
     * @Type("boolean")
     */
    protected $active;

    /**
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param int $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param bool $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }
}