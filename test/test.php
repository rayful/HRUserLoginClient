<?php
/**
 * Created by PhpStorm.
 * User: kingmax
 * Date: 2017/10/7
 * Time: 下午3:23
 */
require __DIR__ ."/../vendor/autoload.php";

$root = "https://hr.xiyanghui.com/user_check";
$client = new \rayful\Tool\HR\LoginClient($root);
try{
    $user = $client->tryGetUser("苏彩霞","123456");
    print_r($user);
}catch (\rayful\Tool\HR\LoginException $exception){
    echo $exception->getCode(),$exception->getMessage();
}
