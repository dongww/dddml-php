<?php
/**
 * User: dongww
 * Date: 2016/6/29
 * Time: 20:15
 */
namespace Query\Role;

trait RoleFilteringFieldsTrait
{
    /** TODO 改为真实的数据 */
    public function getFilteringFields()
    {
        return [
            'a' => 'string',
            'b' => 'integer',
        ];
    }
}
