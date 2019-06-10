<?php
include_once './InheritMath.php';

/**
 * 本类用作当DoMath类作为InheritMath类的基类时的客户端代码
 * @author 杨磊 <18410269837@163.com>
 * @property int|float $added
 * @property int|float $divided
 * @property string $textNum
 * @property string $output
 */

class ClientInherit
{
    private $added;

    private $divided;

    private $textNum;

    private $output;

    public function __construct()
    {
        $family = new InheritMath();
        $this->added = $family->simpleAdd(40, 60);
        $this->divided = $family->simpleDivide($this->added, 25);
        $this->textNum = $family->numToText($this->divided);
        $this->output = $family->addFace("Your Results", $this->textNum);
        echo $this->output;
    }
}

$worker = new ClientInherit();