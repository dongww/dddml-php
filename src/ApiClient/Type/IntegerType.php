<?php
/**
 * User: dongww
 * Date: 2016/5/18
 * Time: 20:31
 */

namespace ApiClient\Type;


class IntegerType implements TypeInterface
{
    protected $value = null;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function toString()
    {
        // TODO: Implement toString() method.
    }
}