<?php
/**
 * User: dongww
 * Date: 2016/5/23
 * Time: 19:13
 */

namespace Test\PhpGo\ApiService;


use PhpGo\ApiService\HeadersInterface;

class BlankHeaders implements HeadersInterface
{

    public function toHeadersArray()
    {
        return [
            'a' => 'aaa',
            'b' => 'bbb',
            'c' => 'ccc',
        ];
    }
}