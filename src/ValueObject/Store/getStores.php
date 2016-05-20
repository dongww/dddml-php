<?php
/**
 * User: dongww
 * Date: 2016/5/18
 * Time: 20:16
 */

namespace ValueObject\Store;

use ApiClient\Request\QueryInterface;
use Helper\BoolToStringHelper;

class getStores implements QueryInterface
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var bool
     */
    private $active;

    /**
     * @var int
     */
    private $size;

    public function __construct($type, $active, $size)
    {
        $this->setType($type);
        $this->setActive($active);
        $this->setSize($size);
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = (string)$type;
    }

    /**
     * @return boolean
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param boolean $active
     */
    public function setActive($active)
    {
        $this->active = (bool)$active;
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize($size)
    {
        $this->size = (int)$size;
    }


    function toQueryArray()
    {
        return [
            'type'   => (string)$this->getType(),
            'active' => BoolToStringHelper::transform($this->isActive()),
            'size'   => (string)$this->getSize(),
        ];
    }
}