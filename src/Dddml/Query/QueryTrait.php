<?php
/**
 * User: dongww
 * Date: 2016/6/29
 * Time: 20:28
 */
namespace Dddml\Query;

/**
 * 查询对象所需的 Trait
 *
 * @package Dddml\Query
 */
trait QueryTrait
{
    /**
     * @var string 查询类型
     */
    private $queryType;

    public function __construct($type)
    {
        $this->setQueryType($type);
    }

    /**
     * 获取查询类型
     * 
     * @return string
     */
    public function getQueryType()
    {
        return $this->queryType;
    }

    /**
     * 设置查询类型
     * 
     * @param string $queryType
     */
    public function setQueryType($queryType)
    {
        $this->queryType = $queryType;
    }
}
