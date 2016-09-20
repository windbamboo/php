<?php
/**
 * Created by PhpStorm.
 * User: windbamboo
 * Date: 2016/9/20
 * Time: 23:20
 */

define("CONST1", 1);//最常用的定义形式
define("_C2", "ABC");//但不推荐使用“__”开头的名字
define("PI", 3, 14);//常量名小写也可以，但不推荐
//使用常量：
echo CONST1;
$str2 = "<h3>" . _C2 . "</h3>";
$mianji = PI * 5 * 5;
const C1 = 11;//这里是顶层代码，可以使用const
echo "<br/>常量C1的值为:" . constant("C1");
$s1 = "C1";
echo "<br/>常量C1的值为: " . constant($s1);
echo "<hr/>";