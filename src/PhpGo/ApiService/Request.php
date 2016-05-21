<?php
/**
 * User: dongww
 * Date: 2016/2/17
 * Time: 9:15
 */

namespace PhpGo\ApiService;

use PhpGo\ApiService\Request\BodyInterface;
use PhpGo\ApiService\Request\QueryInterface;
use Symfony\Component\HttpFoundation\ParameterBag;

/**
 * 对 Api 请求进行封装的类，包含基本的请求信息
 *
 * @package ApiBundle
 */
class Request
{
    const METHOD_GET    = 'get';
    const METHOD_POST   = 'post';
    const METHOD_PATCH  = 'patch';
    const METHOD_PUT    = 'put';
    const METHOD_DELETE = 'delete';

    const FORMAT_JSON = 'json';
    const FORMAT_XML  = 'xml';

    /**
     * @var string
     */
    protected $path;

    /**
     * @var string
     */
    protected $method;

    /**
     * @var string
     */
    protected $format;

    /**
     * @var BodyInterface
     */
    protected $body = null;

    /**
     * @var ParameterBag
     */
    public $headers;

    /**
     * @var ParameterBag
     */
    public $query;

    /**
     * 构造函数
     *
     * @param string           $path 请求路径
     * @param BodyInterface    $body
     * @param QueryInterface   $query
     * @param HeadersInterface $headers
     * @param string           $method
     * @param string           $format
     */
    public function __construct(
        $path,
        BodyInterface $body = null,
        QueryInterface $query = null,
        HeadersInterface $headers = null,
        $method = Request::METHOD_GET,
        $format = Request::FORMAT_JSON
    ) {
        $this->headers = new ParameterBag();
        $this->query   = new ParameterBag();

        $this->setPath($path);
        $this->setBody($body);
        $this->query->add(
            $query instanceof QueryInterface ? $query->toQueryArray() : []
        );
        $this->headers->add(
            $headers instanceof HeadersInterface ? $headers->toHeadersArray() : []
        );
        $this->setMethod($method);
        $this->setFormat($format);
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param string $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param string $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }

    /**
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param string $format
     */
    public function setFormat($format)
    {
        $this->format = $format;
    }

    /**
     * @param BodyInterface $body
     */
    public function setBody(BodyInterface $body = null)
    {
        $this->body = $body;
    }

    /**
     * @return BodyInterface
     */
    public function getBody()
    {
        return $this->body;
    }
}
