<?php

/**
 * Created by PhpStorm.
 * User: sundy
 * Date: 2016/12/16
 * Time: 15:01
 */
class  A
{
    public $p1 = 1;
    public $propArr = array();//一个数组，用于存储“不存成的属性值”

    function __get($name)
    {
        if (isset($this->propArr[$name])) {
            return $this->propArr[$name];
        }
        return "<br/>不存在属性$name";
    }

    function __set($name, $value)
    {
        echo "<br/>设置属性name:$name  value:$value";
        $this->propArr[$name] = $value;
    }

    function __isset($name)
    {
        return isset($this->propArr[$name]);
    }

    function __unset($name)
    {
        unset($this->propArr[$name]);
    }

}

$o1 = new A();
echo "<br />o1的p1属性值为：" . $o1->p1;//存在的属性
echo "<br />o1的p2属性值为：" . $o1->p2;//不存在的属性
$o1->p2 = 2;    //给一个不存在的属性赋值，则会自动调用__set()
echo "<br />o1的p2属性值为：" . $o1->p2;//不存在的属性
$o1->p3 = 3;
echo "<br />o1的p3属性值为：" . $o1->p3;//不存在的属性
echo "<hr />";
$s1 = isset($o1->p1);
$s2 = isset($o1->p2);
var_dump($s1, $s2);
unset($o1->p2);
echo "<br />";
$s2 = isset($o1->p2);
var_dump($s2);