<?php
/**
 * User: dongww
 * Date: 2016/6/27
 * Time: 19:48
 */
namespace Dddml\Query;

use Dddml\AbstractExecutor;

class QueryExecutor extends AbstractExecutor
{
    public function execute(QueryInterface $query, array $option = [])
    {
        $url = $query->getUrl(
            $query->getQueryType(),
            $this->baseUri,
            $option['parameters'] ?: []
        );

        $response = $this->client->request(
            self::METHOD_GET,
            $url,
            $this->getClientOption($option)
        );

        return $response;
    }

    protected function getClientOption(
        array $extOption = []
    ) {
        $option = array_merge($this->option, $extOption);

        $clientOption = static::$defaultClientOption;

        if (isset($option['headers'])) {
            $clientOption['headers'] = array_merge(
                $clientOption['headers'],
                $option['headers']
            );
        }

        if (isset($option['query']) && is_array($option['query'])) {
            $clientOption['query'] = $option['query'];
        }

        return $clientOption;
    }
}
