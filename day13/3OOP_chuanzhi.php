<?php

/**
 * Created by PhpStorm.
 * User: windbamboo
 * Date: 2016/12/15
 * Time: 14:12
 */
class  P
{
    var $v1 = 10;
}

$p1 = new P(); //也可以写成$p1 = new P;
$p2 = $p1;//这是值传递
$p1->v1 = 280;
echo "<br/>p1->v1 为:" . $p1->v1;
echo "<br/>p2->v1 为:" . $p2->v1;
echo "<br />对象p1标识符为：";
var_dump($p1);
echo "<br />对象p2标识符为：";
var_dump($p2);
unset($p1);
echo "<br/>p1->v1 为:" . $p1->v1;
echo "<br/>p2->v1 为:" . $p2->v1;
echo "<br/>----------------------------------";
var_dump($p1);
var_dump($p2);
echo "<br/>----------------------------------";

$p3 = new P();//这个时候才是创建了一个新对象
//并同时会赋予一个新的标识符
$p4 = &$p3;		//这是引用传递
echo "<br />对象p3标识符为：";
var_dump($p3);
echo "<br />对象p4标识符为：";
var_dump($p4);
$p3 = new P();	//再给$p3重新复制
$p3->v1 = 100;	//修改$p3
echo "<br />p3中的v1的值为：" . $p3->v1;
echo "<br />p4中的v1的值为：" . $p4->v1;
echo "<br />对象p3标识符为：";
var_dump($p3);
echo "<br />对象p4标识符为：";
var_dump($p4);

