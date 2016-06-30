<?php
/**
 * User: dongww
 * Date: 2016/6/13
 * Time: 19:29
 */
namespace Dddml\Command;

use Dddml\AbstractExecutor;

/**
 * 命令执行类，所有的命令都经由此类来执行
 *
 * @package Dddml\Command
 */
class CommandExecutor extends AbstractExecutor
{
    /**
     * @var array 不包含 Body 的命令
     */
    public static $noBodyMethods = [
        CommandInterface::COMMAND_DELETE,
    ];

    /**
     * @var array 命令类型和 HTTP 方法的映射表
     */
    public static $commandMethodMap = [
        CommandInterface::COMMAND_CREATE      => self::METHOD_PUT,
        CommandInterface::COMMAND_MERGE_PATCH => self::METHOD_PATCH,
        CommandInterface::COMMAND_DELETE      => self::METHOD_DELETE,
    ];

    /**
     * 执行命令
     *
     * @param CommandInterface $command 命令对象
     * @param array            $option  相关选项
     *
     * @return mixed|\Psr\Http\Message\ResponseInterface
     */
    public function execute(CommandInterface $command, array $option = [])
    {
        $commandType = $command->getCommandType();

        $url = $command->getUrl(
            $commandType,
            $this->baseUri,
            $option['parameters'] ?: []
        );

        $response = $this->client->request(
            static::$commandMethodMap[$commandType],
            $url,
            $this->getClientOption($command, $option)
        );

        return $response;
    }

    /**
     * 将命令和 execute 中的参数转换成 HttpClient 所需的参数，并返回
     *
     * @param CommandInterface $command   命令对象
     * @param array            $extOption 附加的选项
     *
     * @return array
     */
    protected function getClientOption(
        CommandInterface $command,
        array $extOption = []
    ) {
        $clientOption = parent::__getClientOption($extOption);

        if (!in_array(
            $command->getCommandType(),
            static::$noBodyMethods)
        ) {
            $clientOption['body'] = $this->serializer->serialize($command, 'json');
        }

        return $clientOption;
    }
}
