<?php

/**
 * Created by PhpStorm.
 * User: sundy
 * Date: 2016/12/16
 * Time: 15:00
 */
class A
{
}

$obj1 = new A();
$obj2 = $obj1;        //此时还是1个对象，$obj2只是最终指向了跟$obj1同样的对象
$obj3 = new A();    //这时候才有了第二个对象。
var_dump($obj1, $obj2, $obj3);

echo "<h3>上面可见不能实现单例，下面的代码才可以</h3>";

//实现一个单例类：其只能获得一个对象
class B
{
    public $v1 = 10;

    private static $instance;

    private function __construct()
    {
    }

    public static function getNew()
    {
        //如果本类中的$instance还没有数据
        if (!isset(B::$instance)) {
            B::$instance = new self;
        }
        return B::$instance;
    }

    private function __clone()
    {
    }
}


//$o1 = new B();//出错，因为构造方法私有了，
$o1 = B::getNew();
$o1->v1 = 100;    //修改
$o2 = B::getNew();
var_dump($o1);
echo "<br />";
var_dump($o2);
$o3 = clone $o1;    //克隆对象
echo "<br />";
var_dump($o3);
$o1->v1 = 123;
echo "<br />o1中的v1为：" . $o1->v1;
echo "<br />o2中的v1为：" . $o2->v1;
echo "<br />o3中的v1为：" . $o3->v1;