<?php
/**
 * User: dongww
 * Date: 2016/6/1
 * Time: 19:52
 */
namespace Dddml\Command;

interface CommandInterface
{
    const COMMAND_CREATE      = 'Create';
    const COMMAND_MERGE_PATCH = 'MergePatch';
    const COMMAND_DELETE      = 'Delete';

    public function getCommandType();

    /**
     * 获取查询对应的 URL
     *
     * @param string $type 执行的类型
     * @param        $baseUri
     * @param array  $parameters
     *
     * @return string
     */
    public function getUrl($type, $baseUri, array $parameters = []);
}
