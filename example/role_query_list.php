<?php
use Dddml\Query\QueryExecutor;
use Query\Role\RolesQuery;

/** @var QueryExecutor $executor */
$executor = require_once __DIR__ . '/wms_query_bootstrap.php';

$singleQuery = new RolesQuery();

$response = $executor->execute($singleQuery, [
    'query' => [
        'sort' => '-RoleId',
    ],
]);

echo($response->getBody()->getContents());
