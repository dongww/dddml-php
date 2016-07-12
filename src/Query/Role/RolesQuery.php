<?php
/**
 * User: dongww
 * Date: 2016/7/12
 * Time: 17:56
 */
namespace Query\Role;

use Dddml\Query\AbstractQuery;

class RolesQuery extends AbstractQuery
{
    use RoleFilteringFieldsTrait;

    protected $routePath = 'Roles';

    public function getSerializerType()
    {
        return 'array<Entity\Role\Role>';
    }
}
