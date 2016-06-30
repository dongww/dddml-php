<?php
use Dddml\Query\QueryExecutor;
use Dddml\Query\QueryInterface;
use Query\Order\Order;

require_once __DIR__ . '/bootstrap.php';

$orderId = 'orderId001';

$querier = new QueryExecutor($baseUri);

$order = new Order(QueryInterface::QUERY_SINGLE);

$response = $querier->execute($order, [
    'parameters' => [
        'id' => $orderId,
    ],
]);

echo($response->getBody()->getContents());