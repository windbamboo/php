<?php
/**
 * Created by PhpStorm.
 * User: windbamboo
 * Date: 2016/12/9
 * Time: 15:26
 */

$a1 = getArea(3, 3.1416);//计算半径为1，圆周率3.1416的面积
$a2 = getArea(3);//计算半径为1，默认圆周率的面积
echo "a1=$a1,a2=$a2";
/**定义一个函数，该函数可以计算任意半径的圆的面积
 * @param $r 半径
 * @param float $PI 圆周率，默认使用3.14
 * @return float
 */
function getArea($r, $PI = 3.14)
{
    $result = $PI * $r * $r;
    $r++;    //存粹为了体现形参值的改变，这里无实际意义
    return $result;
}

$m1 = 4;
$a1 = getArea($m1, 3.142);
echo "a1=$a1";

function getArea2(&$r, $PI = 3.14)
{
    $result = $PI * $r * $r;
    $r++;    //存粹为了体现形参值的改变，这里无实际意义
    return $result;
}

//$a3 = getArea2(3, 3.142);//这一行语法错误
$m2 = 4;
$a2 = getArea2($m2, 3.142);
echo "<br/>a1=$a1,a2=$a2";
echo "<br/>m1=$m1,m2=$m2";

echo "<hr />";
//不定形参个数的特殊函数使用实例：
//求：若干个数的和：

function getSum()
{
    $arr = func_get_args();	//获得所有实参，结果是数组
    $sum = 0;//初始化一个变量，用于存储总和
    foreach ($arr as $value) {
        $sum += $value;
    }
    return $sum;
}

$he1 = getSum(1,2);
$he2 = getSum(1,3, 4);
$he3 = getSum(1,5, 10, 11);
echo "$he1, $he2, $he3";