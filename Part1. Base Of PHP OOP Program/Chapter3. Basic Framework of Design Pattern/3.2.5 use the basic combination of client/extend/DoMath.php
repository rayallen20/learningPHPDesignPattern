<?php
/**
 * 本类用于完成加法和乘法
 * @author 杨磊 <18410269837@163.com>
 * @property int|float $sum
 * @property int|float $quotient
*/

class DoMath
{
    private $sum;

    private $quotient;

    public function simpleAdd($first, $second)
    {
        $this->sum = $first + $second;
        return $this->sum;
    }

    public function simpleDivide($dividend, $divisor)
    {
        $this->quotient = ($dividend / $divisor);
        return $this->quotient;
    }
}