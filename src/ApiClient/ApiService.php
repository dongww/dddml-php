<?php
/**
 * User: dongweiwei
 * Date: 2016-2-5
 * Time: 15:06
 */

namespace ApiClient;

use ApiClient\Request;
use ApiClient\Request\BodyInterface;
use ApiClient\Request\HeadersInterface;
use ApiClient\Request\QueryInterface;
use ApiClient\Response;
use Httpful\Request as HttpfulRequest;

/**
 * Api 服务的抽象类
 *
 * @package ApiBundle
 */
class ApiService
{
    /**
     * Api 服务的基本路径
     *
     * @var string
     */
    protected $baseUri;

    protected $token;

    public function __construct($baseUri)
    {
        $this->setBaseUri($baseUri);
    }

    /**
     * 获取 Api 服务的基本路径
     *
     * @return string
     */
    public function getBaseUri()
    {
        return $this->baseUri;
    }

    /**
     * 设置 Api 服务的基本路径
     *
     * @param string $baseUri
     */
    public function setBaseUri($baseUri)
    {
        $this->baseUri = $baseUri;
    }

    public function setToken($token)
    {
        $this->token = $token;
    }

    /**
     * 接受 Api 请求并处理，给出反馈
     *
     * @param \ApiClient\Request $request
     *
     * @return \ApiClient\Response
     */
    public function handle(Request $request)
    {
        $url = $this->buildUri($request);

        switch ($request->getMethod()) {
            case Request::METHOD_POST:
                $httpfulRequest = HttpfulRequest::post($url);
                break;
            case Request::METHOD_PUT:
                $httpfulRequest = HttpfulRequest::put($url);
                break;
            case Request::METHOD_DELETE:
                $httpfulRequest = HttpfulRequest::delete($url);
                break;
            case Request::METHOD_PATCH  :
                $httpfulRequest = HttpfulRequest::patch($url);
                break;
            default:
                $httpfulRequest = HttpfulRequest::get($url);
                break;
        }

        if ($this->token) {
            $httpfulRequest->addHeader('Authorization', $this->token);
        }

        $httpfulResponse = $httpfulRequest
            ->sendsJson()
            ->addHeaders($request->headers->all())
            ->body(json_encode($request->getBody())
            )->send();

        $response = new Response($httpfulResponse);

        return $response;
    }

    /**
     * 简化处理 Api 请求的方法
     *
     * @param string           $path   路径
     * @param BodyInterface    $body   请求内容
     * @param QueryInterface   $query
     * @param HeadersInterface $headers
     * @param string           $method 请求方法
     * @param string           $format 请求格式
     *
     * @return \ApiClient\Response
     */
    public function request(
        $path,
        BodyInterface $body = null,
        QueryInterface $query = null,
        HeadersInterface $headers = null,
        $method = Request::METHOD_GET,
        $format = Request::FORMAT_JSON
    ) {
        $request = new Request($path, $body, $query, $headers, $method, $format);

        return $this->handle($request);
    }

    /**
     * 构建请求地址
     *
     * @param \ApiClient\Request $request
     *
     * @return string
     */
    protected function buildUri(Request $request)
    {
        $url = $this->getBaseUri() . $request->getPath();

        if (count($request->query->all())) {
            $url .= '?' . http_build_query($request->query->all());
        }

        return $url;
    }
}