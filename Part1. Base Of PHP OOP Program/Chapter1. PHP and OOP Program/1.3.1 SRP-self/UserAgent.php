<?php
// 设计思路:
// 在本类中,需要:
// 1. 私有成员属性$userAgent.该成员属性用于保存$SERVER['HTTP_USER_AGENT'].
// 2. 公有构造方法__construct().该成员方法用于将$SERVER['HTTP_USER_AGENT']赋值到$userAgent.
// 3. 公有方法getUserAgent().该成员方法用于对外提供获取私有成员属性$userAgent的值.

class UserAgent
{
    private $userAgent;

    public function __construct()
    {
        $this->userAgent = $_SERVER['HTTP_USER_AGENT'];
    }

    public function getUserAgent()
    {
        return $this->userAgent;
    }
}

$userAgent = new UserAgent();
$httpUserAgent = $userAgent->getUserAgent();
echo $httpUserAgent;
die;