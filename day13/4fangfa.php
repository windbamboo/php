<?php

/**
 * Created by PhpStorm.
 * User: windbamboo
 * Date: 2016/12/15
 * Time: 14:12
 */
class  P
{

    public $name = "匿名";
    public $age = 18;
    public $PI = 3.14;

    //定义一个方法，该方法可以进行“自我介绍”
    function introduce()
    {
        echo "<br/>hi，大家好，我叫" . $this->name;
        echo ",今年" . $this->age . "岁";
    }

    function getXieBian($a, $b)
    {
        $s1 = $a * $a + $b * $b;
        $s2 = pow($s1, 0.5);//0.5次方就是开方
        return $s2;
    }

}

$p1 = new P();
$xie1 = $p1->getXieBian(3, 4);
echo "<br/>斜边1=" . $xie1;

class  Person
{

    public $name = "张三";
    public $age = 18;
    public $PI = 3.14;

    //定义一个方法，该方法可以进行“自我介绍”

    function intro()
    {
        echo "<br/>hi，大家好，我叫" . $this->name;
        echo ",今年" . $this->age . "岁";
    }
}

$p1 = new Person();
$p1->name = "张三";
$p1->age = 18;
$p1->intro();

$p2 = new Person();
$p2->name = "李四";
$p2->age = 22;
$p2->intro();

$className = get_class($p2);
echo "<br/>类名$className";