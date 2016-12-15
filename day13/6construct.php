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

    //定义一个方法，该方法可以进行“自我介绍”
    function intro()
    {
        echo "<br />hi，大家好，我叫 " . $this->name;
        echo "，今年 " . $this->age . " 岁";
    }

    function __construct($n, $a)
    {
        $this->name = $n;
        $this->age = $a;
    }

}

//$p1 = new P();	//此时这里出错
//$p1->name = '张三';
//$p1->age = 20;
//$p1->intro();
//上述做法如果可以在创建对象的同时，
//就给该对象设定其特有的值，就方便了，比如：
$p2 = new P('李四', 22);
$p2->intro();