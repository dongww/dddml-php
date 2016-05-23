<?php
/**
 * User: dongww
 * Date: 2016/5/23
 * Time: 18:31
 */

namespace Test\PhpGo\ApiService;

use PhpGo\ApiService\Request;
use PHPUnit_Framework_TestCase;
use Test\PhpGo\ApiService\Request\BlankBody;
use Test\PhpGo\ApiService\Request\BlankQueries;

class RequestTest extends PHPUnit_Framework_TestCase
{
    /** @var Request */
    protected $request;
    protected $path = '/abc';
    protected $body;
    protected $queries;
    protected $headers;

    public function setUp()
    {
        $this->body    = new BlankBody();
        $this->queries = new BlankQueries();
        $this->headers = new BlankHeaders();

        $this->request = new Request(
            $this->path,
            $this->body,
            $this->queries,
            $this->headers,
            Request::METHOD_POST,
            Request::FORMAT_XML
        );
    }

    public function testConstruct()
    {
        $this->assertEquals($this->path, $this->request->getPath());
        $this->assertInstanceOf(
            'Test\PhpGo\ApiService\Request\BlankBody',
            $this->request->getBody()
        );

        $queries = $this->request->queries;
        $this->assertInstanceOf('Symfony\Component\HttpFoundation\ParameterBag', $queries);
        $this->assertEquals('number1', $queries->get('a'));
        $this->assertEquals('stringA', $queries->get('b'));
        $this->assertEquals('boolTrue', $queries->get('c'));

        $headers = $this->request->headers;
        $this->assertInstanceOf('Symfony\Component\HttpFoundation\ParameterBag', $headers);
        $this->assertEquals('aaa', $headers->get('a'));
        $this->assertEquals('bbb', $headers->get('b'));
        $this->assertEquals('ccc', $headers->get('c'));

        $this->assertEquals($this->request->getMethod(), Request::METHOD_POST);
        $this->assertEquals($this->request->getFormat(), Request::FORMAT_XML);
    }
}