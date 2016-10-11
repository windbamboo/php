<?php

/**
 * Created by PhpStorm.
 * User: windbamboo
 * Date: 2016/10/10
 * Time: 23:13
 */
class  Person
{

    public $name = "匿名";
    public $age = 18;

    public function introMe()
    {
        echo "hello!";
        echo "我叫" . $this->name;
        echo ",我今年" . $this->age . "岁";
    }


}

$person1 = new Person();	//创建了一个“人”类对象：对象类型
$person1->name = "小明";	//设定这个人的名字
$person1->age = 22;			//设定这个人的年龄
$person1->introMe();		//让这个人自我介绍