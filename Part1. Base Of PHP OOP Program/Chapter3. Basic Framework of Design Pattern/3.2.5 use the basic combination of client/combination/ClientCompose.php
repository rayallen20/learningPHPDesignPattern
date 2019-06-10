<?php
include_once './DoMath.php';
include_once './DoText.php';

/**
 * 本类用于在组合模式下作为DoMath类和DoText类的客户端代码
 * @author 杨磊 <18410269837@163.com>
 * @property int|float $added
 * @property int|float $divided
 * @property string $textNum
 * @property string $output
 */

class ClientCompose
{
    private $added;

    private $divided;

    private $textNum;

    private $output;

    public function __construct()
    {
        $useMath = new DoMath();
        $useText = new DoText();
        $this->added = $useMath->simpleAdd(40, 60);
        $this->divided = $useMath->simpleDivide($this->added, 25);
        $this->textNum = $useText->numToText($this->divided);
        $this->output = $useText->addFace('Your results', $this->textNum);
        echo $this->output;
    }
}

$worker = new ClientCompose();