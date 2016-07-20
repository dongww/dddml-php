<?php
/**
 * User: dongww
 * Date: 2016/7/19
 * Time: 19:44
 */

namespace Dddml;


interface IdFlattenEnable
{
    const GLUE = ',';
    /**
     * @return string
     */
    public function toString();

    /**
     * @param string $idStr
     *
     * @return IdFlattenEnable
     */
    public static function createFromString($idStr);
}