<?php
/**
 * User: dongww
 * Date: 2016/7/13
 * Time: 14:47
 */
namespace Dddml\Serializer\Type;

abstract class AbstractString
{
    /** @var  string */
    protected $value;

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }
}
