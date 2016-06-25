<?php
/**
 * User: dongww
 * Date: 2016/6/13
 * Time: 19:29
 */
namespace Dddml\Command;

use GuzzleHttp\Client;
use JMS\Serializer\Serializer;

class CommandExecutor
{
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

    public static $noBodyMethods = [
        CommandInterface::COMMAND_QUERY,
        CommandInterface::COMMAND_DELETE,
    ];

    public static $commandMethodMap = [
        CommandInterface::COMMAND_CREATE      => CommandInterface::METHOD_PUT,
        CommandInterface::COMMAND_MERGE_PATCH => CommandInterface::METHOD_PATCH,
        CommandInterface::COMMAND_DELETE      => CommandInterface::METHOD_DELETE,
    ];

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

    public function __construct($baseUri, Serializer $serializer, array $option = [])
    {
        $this->setBaseUri($baseUri);
        $this->setSerializer($serializer);

        $this->client = new Client([
            'base_uri' => $this->baseUri,
        ]);

        $this->setOption($option);
    }

    /**
     * @param CommandInterface $command
     * @param string           $executePath 执行路径，例如：user/login
     * @param array            $option
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function execute(CommandInterface $command, $executePath, array $option = [])
    {
        $response = $this->client->request(
            static::$commandMethodMap[$command->getCommandType()],
            $executePath,
            $this->getClientOption($command, $option)
        );

        return $response;
    }

    /**
     * @param CommandInterface $command
     * @param array            $extOption 附加的选项
     *
     * @return array
     */
    protected function getClientOption(
        CommandInterface $command,
        array $extOption = []
    ) {
        $option = array_merge($this->option, $extOption);

        $clientOption = static::$defaultClientOption;

        if (!in_array(
            $command->getCommandType(),
            static::$noBodyMethods)
        ) {
            $json                 = $this->serializer->serialize($command, 'json');
            $clientOption['body'] = $json;
            echo $json;
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
}
