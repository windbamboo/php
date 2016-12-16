<?php

/**
 * Created by PhpStorm.
 * User: windbamboo
 * Date: 2016/12/15
 * Time: 17:53
 */
class  jizuidongwu
{

    public $prop1 = "有脊椎";

    function show1()
    {
        echo "<br/>特征:" . $this->prop1;
    }
}

class  human extends jizuidongwu
{
    public $prop2 = "两脚走路";

    function show2()
    {
        echo "<br/>特征:" . $this->prop1;
        echo "<br/>特征:" . $this->prop2;
    }
}

$person1 = new human();
$person1->show2();