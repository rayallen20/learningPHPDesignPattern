<?php
/**
 * 本类用于将DoMath类计算后的结果,以文本/加粗的形式展示.
 * @author 杨磊 <18410269837@163.com>
 * @property string $textOut 文本输出
 * @property string $fullFace 黑色加粗字体
*/

include_once './DoMath.php';

class InheritMath extends DoMath
{
    private $textOut;

    private $fullFace;

    public function numToText($num) :string
    {
        $this->textOut = (string)$num;
        return $this->textOut;
    }

    public function addFace($face, $msg) :string
    {
        $this->fullFace = '<strong>'.$face.'</strong>: '.$msg;
        return $this->fullFace;
    }
}