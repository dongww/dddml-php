<?php
/**
 * User: dongww
 * Date: 2016/6/30
 * Time: 20:50
 */
namespace Dddml;

use GuzzleHttp\Client;

/**
 * 授权类，保存授权以后的信息，包括：用户名、权限、过期时间、Token
 *
 * @package Dddml
 */
class Auth
{
    /** @var  string */
    protected $uniqueName;

    /** @var  array */
    protected $role;

    /** @var  \DateTime */
    protected $expires;

    /** @var  string */
    protected $token;

    /** @var  Client */
    protected static $client;

    /**
     * 构造函数
     *
     * @param string    $uniqueName 用户名
     * @param array     $role       授权的权限
     * @param \DateTime $expires    授权过期时间
     * @param  string   $token      授权的 Token
     */
    protected function __construct($uniqueName, $role, \DateTime $expires, $token)
    {
        $this->uniqueName = $uniqueName;
        $this->role       = $role;
        $this->expires    = $expires;
        $this->token      = $token;
    }

    /**
     * @return string
     */
    public function getUniqueName()
    {
        return $this->uniqueName;
    }

    /**
     * @return array
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @return \DateTime
     */
    public function getExpires()
    {
        return $this->expires;
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * 创建一个授权对象
     *
     * @param string $url      授权接口网址
     * @param string $username 用户名
     * @param string $password 密码
     * @param string $clientId 客户端 ID
     *
     * @return Auth
     */
    public static function create($url, $username, $password, $clientId)
    {
        if (!static::$client) {
            static::$client = new Client();
        }

        $response = static::$client->request('POST', $url, [
            'form_params' => [
                'grant_type' => 'password',
                'username'   => $username,
                'password'   => $password,
                'client_id'  => $clientId,
            ],
        ]);

        $content = json_decode($response->getBody()->getContents());

        $token = $content->access_token;
        $auth  = explode('.', $token);
        $data  = json_decode(base64_decode($auth[1]), true);

        return new static(
            $data['unique_name'],
            $data['role'],
            new \DateTime(date('c', $data['exp'])),
            $token
        );
    }
}
