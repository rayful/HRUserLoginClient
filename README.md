# HR User Login Client
一个可以使用HR系统的用户系统验证登录系统的客户端工具类。

## 安装
composer require rayful/hr-login-client

### 基本用法
首先可以将登录地址写入setting文件里面去，然后通过依赖注入去调用。

用例：
```php
$root = "https://hr.system/user_check";

$client = new \rayful\Tool\HR\LoginClient($root);
try{
    $user = $client->tryGetUser("username","password");
    $this->saveSession($user);
}catch (\rayful\Tool\HR\LoginException $exception){
    $this->displayError($exception->getMessage());
    $this->logErrorCode($exception->getCode());
}
```