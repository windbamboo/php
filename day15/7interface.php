<?php
/**
 * Created by PhpStorm.
 * User: sundy
 * Date: 2016/12/16
 * Time: 15:01
 */
//接口：
interface  flyAnimal
{
    function fly();//接口中的方法都是抽象方法，无需声明抽象
}


class bird
{
    public $wings = "2";//2个翅膀
}

//“继承”接口的特性，被称为：实现（implements）

class maque extends bird implements flyAnimal
{

    function fly()
    {
        echo "<br />煽动 {$this->wings} 个翅膀在飞翔";
    }
}

$m1 = new maque();
$m1->fly();

class  tuoniao extends bird
{
    function run()
    {
        echo "<br/>鸵鸟在飞跑!";
    }
}

$t1 = new tuoniao();
$t1->run();