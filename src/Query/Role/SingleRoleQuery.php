<?php
/**
 * User: dongww
 * Date: 2016/7/4
 * Time: 20:55
 */
namespace Query\Role;

use Dddml\Query\AbstractQuery;

class SingleRoleQuery extends AbstractQuery
{
    use RoleFilteringFieldsTrait;

    protected $routePath = 'Roles/{id}';
}
