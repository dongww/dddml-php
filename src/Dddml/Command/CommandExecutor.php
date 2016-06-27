<?php
/**
 * User: dongww
 * Date: 2016/6/13
 * Time: 19:29
 */
namespace Dddml\Command;

use Dddml\AbstractExecutor;

class CommandExecutor extends AbstractExecutor
{
    public static $noBodyMethods = [
        CommandInterface::COMMAND_DELETE,
    ];

    public static $commandMethodMap = [
        CommandInterface::COMMAND_CREATE      => self::METHOD_PUT,
        CommandInterface::COMMAND_MERGE_PATCH => self::METHOD_PATCH,
        CommandInterface::COMMAND_DELETE      => self::METHOD_DELETE,
    ];

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
