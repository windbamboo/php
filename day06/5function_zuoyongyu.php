<?php
/**
 * Created by PhpStorm.
 * User: windbamboo
 * Date: 2016/12/9
 * Time: 15:27
 */
$v1 = 10;    //全局
function f1()
{
    //这里是局部
    echo "<br />v1 = $v1";//局部不能使用全局的变量
    $v2 = 20;
}

f1();
echo "<br />v2 = $v2";//全局不能使用局部

echo "<hr />";
$v1 = 10;
function f2()
{
    $v1 = 100;
    echo "<br />内部：v1 = $v1";
    $v1++;
}

f2();
echo "<br />外部：v1 = $v1";


$v1 = 10;    //全局
function f3()
{
    //这里是局部
    global $v1;        //此时，就可以访问全局变量$v1了
    $v1++;
    echo "<br />内部开始：：v1 = $v1";
    unset($v1);    //然后断开跟外部变量数据的联系
    echo "<br />内部断开后：v1 = $v1";
}

f3();
echo "<br />外部v1 = $v1";

echo "<hr />";
$v1 = 12;    //全局
function f4()
{
    //这里是局部
    echo "<br />内部开始：：v1 = " . $GLOBALS['v1'];
    $GLOBALS['v1']++;
    unset($GLOBALS['v1']);
}

f4();
echo "<br />外部v1 = $v1";


echo "<hr />";
$v1 = 10;    //全局
function f5()
{
    //这里是局部
    $GLOBALS['v1_abcd'] = 20;    //完全设定一个元素
}

f5();
echo "<br />外部v1 = $v1";
echo "<br />外部v1_abcd = $v1_abcd";

function f6()
{
    global $v6;    //此变量之前所有代码都没有定义过
    //实际此$v6为局部变量，
    //但同时也会创建一个同名全局变量
    $v6 = 60;
    //虽然函数结束之后，此局部变量会“销毁”
    //但全局变量的值已经被“引用”到了——即可用。
}

f6();
echo "<br />v6 = $v6";