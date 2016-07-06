<?php
use Dddml\Query\QueryExecutor;
use Dddml\Query\QueryInterface;
use Query\Order\OrderQuery;

require_once __DIR__ . '/bootstrap.php';

$orderId = 'orderId001';

$querier = new QueryExecutor($baseUri);

$order = new OrderQuery(QueryInterface::QUERY_SINGLE);

$response = $querier->execute($order, [
    'parameters' => [
        'id' => $orderId,
    ],
]);

echo($response->getBody()->getContents());