<?php
/**
 * Created by PhpStorm.
 * User: sundy
 * Date: 2016/12/16
 * Time: 15:01
 */

$link = mysqli_connect("localhost", "root", "");
var_dump($link);

$result=$link->query("select now();");
$result2=$link->query("use wiki;");
//得到一个“连接到mysql数据库”的资源。
//资源的理解：一个外部本来就有的“对象”（数据）
//程序中，该资源变量只是一个“指向”该对象（数据）的标示符
//var_dump($link);

$result = $link->query("select * from money");//这是结果集资源
//对该结果集进行“fetch”操作才能获得php数据（数组）
echo "<br />";
//var_dump($result);

class A{}
$o1 = new A();			//对象是我们通常代码完整创造出来。
echo "<br />";
var_dump($o1);

$arr = array(3, 'abc', true);
echo "<br />";
var_dump($arr);