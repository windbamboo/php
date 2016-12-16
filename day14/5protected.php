<?php

/**
 * Created by PhpStorm.
 * User: windbamboo
 * Date: 2016/12/15
 * Time: 17:53
 */
class  C
{
    protected $p1 = 1;

    public function showInfo()
    {
        echo "<br/>属性p1=" . $this->p1;
    }

}

class  D extends C
{

    protected $p2 = 2;

    public function showInfo2()
    {
        echo "<br />属性p1=" . $this->p1;//访问的是上级的受保护成员$p1
        echo "<br />属性p2=" . $this->p2;//访问的是自己的受保护成员$p1
    }
}

$d1 = new D();
$d1->showInfo2();
echo "<br />在类外p2=" . $d1->p2;//这一行出错，因为在“外面”不能访问受保护成员$p2