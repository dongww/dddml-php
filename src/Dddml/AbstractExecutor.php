<?php
/**
 * User: dongww
 * Date: 2016/6/27
 * Time: 19:50
 */
namespace Dddml;

use GuzzleHttp\Client;
use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;

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

    public static $defaultClientOption = [
        'headers' => [
            'Content-Type' => 'application/json',
        ],
    ];

    public function __construct($baseUri, Serializer $serializer = null, array $option = [])
    {
        $this->setBaseUri($baseUri);

        if (!$serializer) {
            $cs   = new CamelCaseNamingStrategy('', false);
            $snas = new SerializedNameAnnotationStrategy($cs);

            $serializer = SerializerBuilder::create()
                ->setPropertyNamingStrategy($snas)
                ->build();
        }

        $this->setSerializer($serializer);

        $this->client = new Client([
            'base_uri' => $this->baseUri,
        ]);

        $this->setOption($option);
    }

    /**
     * @return array
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * @param array $option
     */
    public function setOption($option)
    {
        $this->option = $option;
    }

    public function setBaseUri($uri)
    {
        $this->baseUri = $uri;
    }

    public function setSerializer(Serializer $serializer)
    {
        $this->serializer = $serializer;
    }
}
