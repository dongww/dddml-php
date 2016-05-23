<?php
/**
 * User: dongww
 * Date: 2016/5/23
 * Time: 18:46
 */

namespace Test\PhpGo\ApiService\Request;

use PhpGo\ApiService\Request\QueriesInterface;

class BlankQueries implements QueriesInterface
{

    function toQueryArray()
    {
        return [
            'a' => 'number1',
            'b' => 'stringA',
            'c' => 'boolTrue'
        ];
    }
}