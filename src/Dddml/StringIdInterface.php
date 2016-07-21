<?php
/**
 * User: dongww
 * Date: 2016/7/19
 * Time: 19:44
 */
namespace Dddml;

interface StringIdInterface
{
    const GLUE = ',';
    /**
     * @return string
     */
    public function toString();

    /**
     * @param string $idStr
     *
     * @return StringIdInterface
     */
    public static function createFromString($idStr);
}