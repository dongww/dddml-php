<?php
/**
 * User: dongww
 * Date: 2016/2/17
 * Time: 11:14
 */

namespace PhpGo\ApiService\Request;

interface BodyInterface
{
    /**
     * @return array
     */
    public function getGroups();
}