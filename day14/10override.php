<?php

/**
 * Created by PhpStorm.
 * User: sundy
 * Date: 2016/12/15
 * Time: 17:54
 */
class Jizhuidongwu
{
    public $p3 = "具有脊椎";

    function showMe()
    {
        echo "<br />我是脊椎动物，特征为：";
        echo "<br />属性p1=" . $this->p3;
    }
}

class Human extends Jizhuidongwu
{

    public $p1 = "具有28节脊椎骨的脊椎";//28是假设
    public $p2 = '有32颗牙齿';

    function showMe()
    {
        echo "<br />我是人类，特征为：";
        //echo "<br />属性p1：" . $this->p1;
        //实际应用中，通常上一行（显示父类信息）会使用下一行代替
        parent::showMe();    //这样可以更节省
        echo "<br />属性p2：" . $this->p2;
        echo "<br />属性p3：" . $this->p3;
    }
}

$h1 = new Human();
$h1->showMe();


class C
{
    function show1($para1)
    {
        echo "<br />父类的show1方法：para1 = " . $para1;
    }
}

class D extends C
{
    function show1($para, $para2)
    {
        parent::show1($para);
        echo "<br />子类的show1方法";
    }
}

$d = new D();
$d->show1(1, 2);