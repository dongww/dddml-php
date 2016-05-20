<?php
/**
 * User: dongww
 * Date: 2016/5/19
 * Time: 19:09
 */

namespace Helper;


class BoolToStringHelper implements TypeTransformHelperInterface
{
    public static function transform($value)
    {
        return $value ? 'true' : 'false';
    }
}