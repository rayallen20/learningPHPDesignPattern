<?php
/**
 * 本类用于作为MobileSniffer类的客户端代码使用
 * @author 杨磊 <18410269837@163.com>
 * @since 20109-05-16 23:57
 * @property $mobSniff 用于装载MobileSniff类的实例
 */

require_once './MobileSniffer.php';

class Client
{
    private $mobSniff;

    public function __construct()
    {
        $this->mobSniff = new MobileSniffer();
        echo 'Device = ' . $this->mobSniff->findDevice() . '<br/>';
        echo 'Browser = ' . $this->mobSniff->findBrowser() . '<br/>';
    }
}

$trigger = new Client();
