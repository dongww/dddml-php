<?php
/**
 * User: dongww
 * Date: 2016/5/21
 * Time: 13:54
 */

namespace Entity\User;

use PhpGo\ApiService\AbstractManager;
use PhpGo\ApiService\Exception;
use PhpGo\ApiService\Request;

class UserManager extends AbstractManager
{
    const REQUIRE_PATH = "/members/login";

    public function login($username, $password)
    {
        $user = new User();
        $user->setPricipalName($username);
        $user->setPassword($password);
        $user->setGroups(['login']);

        $apiService = $this->apiService;

        $return = $apiService->request(
            static::REQUIRE_PATH,
            $user,
            null,
            null,
            Request::METHOD_PUT
        )->getObject(
            'Entity\User\User'
        );

        return $return;
    }
}