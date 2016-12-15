<?php

/**
 * Created by PhpStorm.
 * User: windbamboo
 * Date: 2016/12/15
 * Time: 14:12
 */
class   C1
{

    static $v1 = 10;
}

C1::$v1 = 1000;
$s1 = C1::$v1;
echo "s1=$s1";
$c1 = new C1();
$c2 = new C1();
$c1::$v1 = 8888;
echo "<br />c1的中的静态属性v1=" . $c1::$v1;
echo "<br />c2的中的静态属性v1=" . $c2::$v1;

class S1
{
    public $v1 = 1;
    static $v2 = 2;

    static function showInfo()
    {
        echo "<br />显示信息";
        //echo "v1 = " . $this->v1;
        echo "v2 = " . S1::$v2;
        //这里是静态方法中，准备调用非静态方法
        //S1::f1();//这里违法了调用普通方法的语法
        // $this->f1();//这里违法了静态方法中没有$this
    }

    function f1()
    {
        echo "<br />这是非静态方法。";
    }
}

$obj1 = new S1();
$obj1::showInfo();
S1::showInfo();

class S2
{
    public $v1 = 1;

    static function getNew()
    {
        return new self;    //self代表“当前类”
        //new self就是当前类的一个对象
    }

}

echo "<hr/>";
$obj2 = S2::getNew();//通过S2的静态方法得到该类的一个新对象
var_dump($obj2);