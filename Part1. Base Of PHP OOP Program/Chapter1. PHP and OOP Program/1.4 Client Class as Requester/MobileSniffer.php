<?php
/**
 * 本类用于检测客户端移动设备的设备类型以及浏览器
 * @author 杨磊 <18410269837@163.com>
 * @property $userAgent 客户端的设备和浏览器信息
 * @property $device 客户端可能设备列表
 * @property $browser 客户端可能浏览器列表
 * @property $deviceLength 客户端可能设备的数量
 * @property $browserLength 客户端可能浏览器的数量
 * @since 20109-05-16 23:57
*/
class MobileSniffer
{
    private $userAgent;
    private $device;
    private $browser;
    private $deviceLength;
    private $browserLength;

    public function __construct()
    {
        $this->userAgent = $_SERVER['HTTP_USER_AGENT'];
        $this->userAgent = strtolower($this->userAgent);

        $this->device = [
            'iphone',
            'ipad',
            'android',
            'silk',
            'blackberry',
            'touch'
        ];

        $this->browser = [
            'firefox',
            'chrome',
            'opera',
            'msie',
            'safari',
            'blackberry',
            'trident'
        ];

        $this->deviceLength = count($this->device);
        $this->browserLength = count($this->browser);
    }

    /**
     * 本方法用于返回客户端移动设备的名称
     * @access public
     * @author 杨磊 <18410269837@163.com>
     * @param void
     * @return string|null
    */
    public function findDevice() :?string
    {
        for($uaSniff = 0; $uaSniff < $this->deviceLength; $uaSniff++)
        {
            if(strstr($this->userAgent, $this->device[$uaSniff]) != '')
            {
                return $this->device[$uaSniff];
            }
        }
        return null;
    }

    /**
     * 本方法用于返回客户端移动浏览器的名称
     * @access public
     * @author 杨磊 <18410269837@163.com>
     * @param void
     * @return string|null
    */
    public function findBrowser() :?string
    {
        for($uaStaff = 0; $uaStaff < $this->browserLength; $uaStaff++)
        {
            if(strstr($this->userAgent, $this->browser[$uaStaff]) != '')
            {
                return $this->browser[$uaStaff];
            }
        }
        return null;
    }
}

$obj = new MobileSniffer();
$device = $obj->findDevice();
var_dump($device);
$browser = $obj->findBrowser();
var_dump($browser);
die;
