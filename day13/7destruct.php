<?php

/**
 * Created by PhpStorm.
 * User: windbamboo
 * Date: 2016/12/15
 * Time: 14:12
 */
class  P
{

    public $v1 = 1;

    function __construct($n)
    {
        $this->v1 = $n;
        echo "<br />被创建了";

    }

    function __destruct()
    {
        echo "<br />被销毁了" . $this->v1;
    }
}

echo "<h3>1</h3>";
$p1 = new P(1);
$p2 = new P(2);
$p3 = new P(3);
echo "<h3>2</h3>";
unset($p1);    //被销毁
echo "<h3>3</h3>";
$p2 = 3;    //可以等于任意一个数据
echo "<h3>4</h3>";

//目的是让$p2原来所指向的对象“没有所属”
//此时就会发生该原来对象“销毁”情形
//不过，如果原来有代码$p2a = $p2,
//则此时又不会销毁该对象

echo "<h3>5</h3>";