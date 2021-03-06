<?php
/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 2017/10/7
 * Time: 下午3:10
 */

namespace rayful\Tool\HR;


class LoginClient
{
    private $root;

    /**
     * HRUserLoginClient constructor.
     * @param string $root
     */
    public function __construct($root)
    {
        $this->root = $root;
    }

    public function tryGetUser($username, $password)
    {
        if (filter_var($this->root, FILTER_VALIDATE_URL)) {
            $path = $this->root . "?" . http_build_query([
                    'username' => $username,
                    'password' => $password,
                ]);
        } else {
            $path = $this->root;
        }
        $text = file_get_contents($path);
        $json = json_decode($text);
        if ($json->result) {
            $user = new User();
            $user->set($json->user);
            return $user;
        }else{
            if($json->msg){
                throw new LoginException($json->msg, $json->code);
            }else{
                throw new LoginException("无任何返回，可能是网络异常，或请求地址缺失（请确认你已经构造了登录根地址）。");
            }
        }
    }
}