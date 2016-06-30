<?php
/**
 * User: dongww
 * Date: 2016/6/27
 * Time: 20:37
 */
namespace Dddml\Query;

/**
 * 查讯类需要遵循的接口
 *
 * @package Dddml\Query
 */
interface QueryInterface
{
    const QUERY_FILTERING_FIELDS = 'FilteringFields';
    const QUERY_LIST             = 'List';
    const QUERY_SINGLE           = 'Single';

    public function getQueryType();

    /**
     * 获取命令对应的 URL
     *
     * @param string $type 执行的类型
     * @param        $baseUri
     * @param array  $parameters
     *
     * @return string
     */
    public function getUrl($type, $baseUri, array $parameters = []);

    /**
     * 获取可以用来过滤的字段数组
     *
     * @return array
     */
    public function getFilteringFields();
}
