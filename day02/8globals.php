<?php
/**
 * Created by PhpStorm.
 * User: liuguozhu
 * Date: 2016/9/20
 * Time: 23:05
 */
$v1 = 1;//全局变量
$v2 = 2;
function f1()
{
    $v3 = 3;
    $v4 = 4;
    echo "<br/>函数f1被调用!";
}

f1();
echo "<pre> GLOBALS数组内容为:<BR/>";
var_dump($GLOBALS);
echo "</pre>";