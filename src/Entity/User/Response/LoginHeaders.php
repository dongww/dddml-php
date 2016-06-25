<?php
/**
 * User: dongww
 * Date: 2016/5/23
 * Time: 21:04
 */
namespace Entity\User\Response;

use PhpGo\ApiService\HeadersInterface;

class LoginHeaders implements HeadersInterface
{

    public function toHeadersArray()
    {
        return [];
    }
}
