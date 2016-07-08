<?php
/**
 * User: dongww
 * Date: 2016/6/1
 * Time: 19:52
 */
namespace Dddml\Command;

use Symfony\Component\Routing\Route;

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
     * 获取执行的 http 方法
     * 
     * @return string
     */
    public function getMethod();

    /**
     * @return Route
     */
    public function getRoute();

    /**
     * @return CommandBodyInterface
     */
    public function getBody();
}
