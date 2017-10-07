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
        $URL = $this->root . "?" . http_build_query([
                'username' => $username,
                'password' => $password,
            ]);
        $text = file_get_contents($URL);
        $json = json_decode($text);
        if ($json->result) {
            $user = new User();
            $user->set($json->user);
            return $user;
        }else{
            throw new LoginException($json->msg, $json->code);
        }
    }
}