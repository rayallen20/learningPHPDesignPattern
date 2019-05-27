<?php
interface A
{
    const B = 5;
    // 参考laravel5.7 ArrayAble interface 是带有访问控制修饰符的
    public function C(int $a) :?int;
}

class D implements A
{
    public function runC()
    {
        echo $this->C(1);
    }

    public function C(int $a): ?int
    {
        return $a;
    }
}

$d = new D();
$d->runC();