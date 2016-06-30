<?php
/**
 * User: dongww
 * Date: 2016/6/1
 * Time: 19:52
 */
namespace Dddml\Command;

/**
 * 命令类需要遵循的接口
 *
 * @package Dddml\Command
 */
interface CommandInterface
{
    const COMMAND_CREATE      = 'Create';
    const COMMAND_MERGE_PATCH = 'MergePatch';
    const COMMAND_DELETE      = 'Delete';

    /**
     * @return string 获取命令类型
     */
    public function getCommandType();

    /**
     * 获取命令对应的 URL
     *
     * @param string $type       命令的类型
     * @param string $baseUri    基础网址，一般是域名加上 API 的主路径
     * @param array  $parameters 命令路径中所需要的参数，例如 /Orders/{id}，需要传入 id 的值
     *
     * @return string
     */
    public function getUrl($type, $baseUri, array $parameters = []);
}
