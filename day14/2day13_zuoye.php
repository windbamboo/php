<?php

/**
 * Created by PhpStorm.
 * User: windbamboo
 * Date: 2016/12/15
 * Time: 17:52
 */
//定义一个“教师类”，并由此类实例化两个“教师对象”。
//该类至少包括3个属性，3个方法，其中有个方法是“自我介绍”，
//就能够把自身的所有信息显示出来。
class  Teacher
{
    public $name;

    public $workerYear = 0;

    public $major = "PHP";

    function introMe()
    {
        echo "我叫$this->name,我工作{$this->workerYear}年,我的专业是$this->major";
    }
}

$t1 = new Teacher();
$t1->name = "张三疯";
$t1->workerYear = 2;
$t1->introMe();
echo "<br/>";

/*
定义一个“学生类”，并由此类实例化两个“学生对象”。该类包括姓名，性别，年龄等基本信息，并至少包括一个静态属性（表示总学生数）和一个常量，以及包括构造方法和析构方法。该对象还可以调用一个方法来进行“自我介绍”（显示其中的所有属性和常量）。构造方法可以自动初始化一个学生的基本信息，并显示“ｘｘ加入传智，当前有xx个学生”。
*/

class  Student
{
    public $name = "学生";
    public $gender;
    public $age = 18;
    static $sum = 0;
    const  PI = 3.14;


    function __construct($name, $gender, $age)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        self::$sum++;
        echo "<br /><br />欢迎{$name}加入xx，当前有" . self::$sum . "个学生";

    }

    function __destruct()
    {
        echo "<br />" . $this->name . "被销毁";
    }

    function introMe()
    {

        echo "<br/> 我叫$this->name,我今年{$this->age}岁,";
        if ($this->gender == true) {
            echo "我是男生。";

        } else if ($this->gender = false) {
            echo "我是女生。";
        } else {
            //echo "我不告诉你。";
        }

    }

}

$s1 = new Student("张三疯", true, 22);
$s1->introMe();
$s2 = new Student("李四", true, 22);
$s2->introMe();
$s3 = new Student("砖石王老五", false, 26);
$s3->introMe();




