<?php
/**
 * 代理模式 代理类
 * @property RealSubject $realSubject
*/

include_once './ISubject.php';
include_once './RealSubject.php';

class Proxy extends ISubject
{
    // 本成员属性体现了相识关系.即参与者Proxy包含参与者RealSubject
    // 或者也可以说是1个Proxy类的实例可以持有一个或多个RealSubject的实例
    // 实际上这也体现出了PHP弱类型的缺点 如果支持类型声明 那么就可以在类的定义时就确认:
    // 成员属性realSubject究竟可以持有1个RealSubject还是多个RealSubject
    private $realSubject;

    protected function request()
    {
        $this->realSubject = new RealSubject();
        $this->realSubject->request();
    }

    public function login($un, $pw)
    {
        // 计算口令等逻辑
        if($un === 'Professional' && $pw === 'acp')
        {
            $this->request();
        } else {
            echo 'Cry Havoc, and let slip the dogs of war!';
        }
    }
}