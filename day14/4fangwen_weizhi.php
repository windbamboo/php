<?php

/**
 * Created by PhpStorm.
 * User: sundy
 * Date: 2016/12/15
 * Time: 17:53
 */
class  C
{
    public $p1 = 1;

    public function showInfo()
    {
        echo "<br/>属性p1=" . $this->p1;
        echo "<br/>属性p2=" . $this->p2;;

    }
}

class  D extends C
{
    public $p2 = 2;

    public function showInfo2()
    {
        echo "<br />属性p1=" . $this->p1;//访问的是上级的$p1（常见情形）
        echo "<br />属性p2=" . $this->p2;
    }

}

$d1 = new D();
$d1->showInfo2();
echo "<br />在类外p2=" . $d1->p2;
$d1->showInfo();


