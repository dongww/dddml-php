<?php
/**
 * User: dongww
 * Date: 2016/6/27
 * Time: 20:37
 */
namespace Dddml\Query;

use Symfony\Component\Routing\Route;

/**
 * 查讯类需要遵循的接口
 *
 * @package Dddml\Query
 */
interface QueryInterface
{
    /**
     * @return Route
     */
    public function getRoute();

    /**
     * 获取可以用来筛选的字段数组
     *
     * @return array
     */
    public function getFilteringFields();

    /**
     * 获取序列化的类型
     * 
     * @return string
     */
    public function getReturnType();
}
