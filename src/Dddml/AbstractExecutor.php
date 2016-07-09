<?php
/**
 * User: dongww
 * Date: 2016/6/27
 * Time: 19:50
 */
namespace Dddml;

use Dddml\Serializer\Naming\DddmlStrategy;
use GuzzleHttp\Client;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

/**
 * 查询执行类和命令执行类的基类
 *
 * @package Dddml
 */
abstract class AbstractExecutor
{
    const METHOD_GET    = 'GET';
    const METHOD_POST   = 'POST';
    const METHOD_PUT    = 'PUT';
    const METHOD_PATCH  = 'PATCH';
    const METHOD_DELETE = 'DELETE';

    protected $baseUri;

    /** @var  Serializer */
    protected $serializer;

    /** @var  Client */
    protected $client;

    /** @var  array */
    protected $option;

    /** @var  Auth */
    protected $auth = null;

    /**
     * 命令的路由集合
     *
     * @var  RouteCollection
     */
    protected $routes;

    public static $defaultClientOption = [
        'headers' => [
            'Content-Type' => 'application/json',
        ],
    ];

    /**
     * AbstractExecutor constructor.
     *
     * @param string          $baseUri    基础网址，例如 http://example.com/api/v1/
     * @param Serializer|null $serializer 序列化工具对象
     * @param array           $option     选项
     */
    public function __construct($baseUri, Serializer $serializer = null, array $option = [])
    {
        $this->setBaseUri($baseUri);

        if (!$serializer) {
            $cs   = new DddmlStrategy();
            $snas = new SerializedNameAnnotationStrategy($cs);

            $serializer = SerializerBuilder::create()
                ->setPropertyNamingStrategy($snas)
                ->build();
        }

        $this->setSerializer($serializer);

        $this->client = new Client([
            'base_uri' => $this->baseUri,
        ]);
        
        $this->routes = new RouteCollection();

        $this->setOption($option);
    }

    /**
     * 获取授权对象
     *
     * @return Auth
     */
    public function getAuth()
    {
        return $this->auth;
    }

    /**
     * 设置授权对象
     *
     * @param Auth $auth
     */
    public function setAuth(Auth $auth)
    {
        $this->auth = $auth;
    }

    /**
     * 移除授权
     */
    public function removeAuth()
    {
        $this->auth = null;
    }

    /**
     * 获取选项
     *
     * @return array
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * 设置选项
     *
     * @param array $option
     */
    public function setOption($option)
    {
        $this->option = $option;
    }

    /**
     * 设置基础网址
     *
     * @param string $uri
     */
    public function setBaseUri($uri)
    {
        $this->baseUri = $uri;
    }

    /**
     * 设置序列化工具对象
     *
     * @param Serializer $serializer
     */
    public function setSerializer(Serializer $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * 将参数转换成 HttpClient 所需的参数，并返回
     *
     * @param array $extOption 附加的选项
     *
     * @return array
     */
    protected function __getClientOption(array $extOption = [])
    {
        $option = array_merge($this->option, $extOption);

        $clientOption = static::$defaultClientOption;

        if ($this->getAuth()) {
            $clientOption['headers']['Authorization'] = 'Bearer ' . $this->getAuth()->getToken();
        }

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

    public function addRoute($name, Route $route)
    {
        $this->routes->add($name, $route);
    }

    /**
     * @return RouteCollection
     */
    public function getRoutes()
    {
        return $this->routes;
    }
}
