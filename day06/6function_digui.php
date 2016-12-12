<?php
/**
 * Created by PhpStorm.
 * User: windbamboo
 * Date: 2016/12/9
 * Time: 15:27
 */
function f1()
{
    static $i = 1;
    echo "  $i";
    $i++;
    if ($i < 100) {
        f1();
    }
}

f1();
echo "<hr/>";

function jiecheng($n)
{
    if ($n == 1) {
        return 1;
    }
    $result = jiecheng($n - 1) * $n;
    return $result;
}

$v1 = jiecheng(6);
echo "v1 = $v1<br/>";
/*
分析执行过程：
$v1 = jiecheng(6)==>
$v1 = jiecheng(5) * 6 ==>
$v1 = (jiecheng(4) * 5) * 6 ==>
$v1 = ((jiecheng(3) * 4) * 5) * 6 ==>
$v1 = (((jiecheng(2) * 3) * 4) * 5) * 6 ==>
$v1 = ((((jiecheng(1) * 2) * 3) * 4) * 5) * 6 ==>
$v1 = ((((1 * 2) * 3) * 4) * 5) * 6 ==>
$v1 = ((((2) * 3) * 4) * 5) * 6 ==>
$v1 = (((6) * 4) * 5) * 6 ==>
$v1 = ((24) * 5) * 6 ==>
$v1 = (120) * 6 ==>
$v1 = 720
*/

/**
 * 该函数可以求斐波那契数列的第n项
 */
function fbnq($n)
{
    $n1 = 1;    //数列的最初第1项，代表要求的某项的往前２项
    $n2 = 1;    //数列的最初第2项，代表要求的某项的往前１项
    $result = 0;    //结果
    for ($i = 3; $i <= $n; $i++) {    //从第3项开始
        $result = $n1 + $n2;
        $n1 = $n2;    //刚才的往前１项变成第２项了
        $n2 = $result;//刚才的最新值，就当作往前第１项了
        //上两行的目的是为了准备求“下一项”
    }
    return $result;
}

$v2 = fbnq(3);    //求第3项：
echo "$v2";
/*echo "<br />斐波那契第3项：" . $v2;
echo "<br />斐波那契第4项：" . fbnq(4);
echo "<br />斐波那契第7项：" . fbnq(7);
echo "<br />斐波那契第12项：" . fbnq(12);*/