<?php
/**
 * User: dongww
 * Date: 2016/6/29
 * Time: 20:28
 */

namespace Dddml\Query;


trait QueryTrait
{
    /** @var  string */
    private $queryType;

    public function __construct($type)
    {
        $this->setQueryType($type);
    }

    /**
     * @return string
     */
    public function getQueryType()
    {
        return $this->queryType;
    }

    /**
     * @param string $queryType
     */
    public function setQueryType($queryType)
    {
        $this->queryType = $queryType;
    }
}