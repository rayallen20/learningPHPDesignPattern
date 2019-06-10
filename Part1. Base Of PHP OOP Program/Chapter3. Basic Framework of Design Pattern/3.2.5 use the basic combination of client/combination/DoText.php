<?php
/**
 * 本类用于将继承体系中的InheritMath(即文本展示数字类)以组合的形式重构
 * @author 杨磊 <18410269837@163.com>
 * @property string $textOut
 * @property string $fullFace
*/

class DoText
{
    private $textOut;

    private $fullFace;

    public function numToText($num) :string
    {
        $this->textOut = (string)$num;
        return $this->textOut;
    }

    public function addFace(string $face, string $msg) :string
    {
        $this->fullFace = '<strong>'.$face.'</strong>:'.$msg;
        return $this->fullFace;
    }
}
