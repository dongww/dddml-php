<?php
use Dddml\Query\QueryExecutor;
use Dddml\Query\QueryInterface;
use Query\Order\OrderQuery;

require_once __DIR__ . '/bootstrap.php';

$orderId = 'orderId001';

$querier = new QueryExecutor($baseUri);

$order = new OrderQuery(QueryInterface::QUERY_LIST);

$response = $querier->execute($order, [
    'query' => [
        'sort' => '-Id',
    ],
]);

echo($response->getBody()->getContents());