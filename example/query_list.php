<?php
use Dddml\Query\QueryExecutor;
use Dddml\Query\QueryInterface;
use Query\Order\Order;

require_once __DIR__ . '/bootstrap.php';

$orderId = 'orderId001';

$querier = new QueryExecutor($baseUri);

$order = new Order(QueryInterface::QUERY_LIST);

$response = $querier->execute($order, [
    'query' => [
        'sort' => '-Id',
    ],
]);

echo($response->getBody()->getContents());