<?php
/**
 * User: dongww
 * Date: 2016/6/27
 * Time: 19:48
 */
namespace Dddml\Query;

use Dddml\AbstractExecutor;
use Symfony\Component\Routing\Generator\UrlGenerator;
use Symfony\Component\Routing\RequestContext;

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
     * @return mixed
     */
    public function execute(QueryInterface $query, array $option = [])
    {
        $routes = $this->getRoutes();
        $routes->add('route', $query->getRoute());

        $generator = new UrlGenerator(
            $routes,
            new RequestContext($this->baseUri)
        );

        $url = $generator->generate('route', $option['parameters'] ?: []);

        $response = $this->client->request(
            self::METHOD_GET,
            $url,
            $this->getClientOption($option)
        );

        $data = $this->serializer->deserialize(
            $response->getBody()->getContents(),
            $query->getReturnType(),
            'json'
        );

        return $data;
    }

    /**
     * 将查询中的参数转换成 HttpClient 所需的参数，并返回
     *
     * @param array $extOption 附加的选项
     *
     * @return array
     */
    protected function getClientOption(array $extOption = [])
    {
        return parent::__getClientOption($extOption);
    }
}
