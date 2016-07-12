<?php
use Dddml\Query\QueryExecutor;
use Query\Role\SingleRoleQuery;

/** @var QueryExecutor $executor */
$executor = require_once __DIR__ . '/wms_query_bootstrap.php';

$singleQuery = new SingleRoleQuery();

$response = $executor->execute($singleQuery, [
    'parameters' => [
        'id' => 'WarehouseManager',
    ],
]);

var_dump($response);
