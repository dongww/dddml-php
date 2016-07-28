<?php
/**
 * User: dongww
 * Date: 2016/6/27
 * Time: 19:48
 */
namespace Dddml\Executor\Http;

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
     * @param QueryRequestInterface $request 查询对象
     * @param array                 $option  相关选项
     *
     * @return mixed
     */
    public function execute(QueryRequestInterface $request, array $option = [])
    {
        $data = $this->serializer->deserialize(
            $this->executeJson($request, $option),
            $request->getReturnType(),
            'json'
        );

        return $data;
    }

    public function count(QueryCountRequestInterface $request, array $option = [])
    {
        $route = $request->getRoute();
        $route->setPath($route->getPath() . '/_count');

        return $this->executeJson($request, $option);
    }

    public function executeJson(QueryRequestInterface $request, array $option = [])
    {
        $response = $this->executeResponse($request, $option);

        return $response->getBody()->getContents();
    }

    protected function executeResponse(QueryRequestInterface $request, array $option = [])
    {
        $routes = $this->getRoutes();
        $routes->add('route', $request->getRoute());

        $generator = new UrlGenerator(
            $routes,
            new RequestContext($this->baseUri)
        );

        $url = $generator->generate(
            'route',
            isset($option['parameters']) ? $option['parameters'] : []
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
    protected function getClientOption(array $extOption = [])
    {
        return parent::__getClientOption($extOption);
    }
}
