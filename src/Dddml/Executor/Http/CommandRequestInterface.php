<?php
/**
 * User: dongww
 * Date: 2016/6/1
 * Time: 19:52
 */
namespace Dddml\Executor\Http;

use Dddml\Command\CommandRequestInterface as BaseInterface;
use Symfony\Component\Routing\Route;

/**
 * 命令类需要遵循的接口
 */
interface CommandRequestInterface extends BaseInterface
{
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
}
