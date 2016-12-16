<?php

/**
 * Created by PhpStorm.
 * User: windbamboo
 * Date: 2016/12/15
 * Time: 17:53
 */
class C
{
    public $p1 = 1;
    public $p3 = 3;

    function __construct($p1, $p3)
    {
        echo "<br />父类构造方法调用了";
        $this->p1 = $p1;
        $this->p3 = $p3;
    }
}

class D extends C
{
    public $p2 = 2;

    function __construct($p1, $p2, $p3)
    {
        echo "<br />子类构造方法调用了";
        parent::__construct($p1, $p3);

        $this->p2 = $p2;
    }

    function showInfo()
    {
        echo "<br />p1=$this->p1";
        echo "<br />p2=$this->p2";
        echo "<br />p3=$this->p3";
    }
}

$d1 = new D(10, 20, 30);
$d1->showInfo();