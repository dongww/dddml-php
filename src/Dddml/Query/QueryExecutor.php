<?php
/**
 * User: dongww
 * Date: 2016/6/27
 * Time: 19:48
 */
namespace Dddml\Query;

use Dddml\AbstractExecutor;

/**
 * 查询执行类，所有的查询都经由此类来执行
 * @package Dddml\Query
 */
class QueryExecutor extends AbstractExecutor
{
    /**
     * 执行查询
     *
     * @param QueryInterface $query  查询对象
     * @param array          $option 相关选项
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
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

    /**
     * 将查询中的参数转换成 HttpClient 所需的参数，并返回
     *
     * @param array $extOption 附加的选项
     *
     * @return array
     */
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