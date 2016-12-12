<?php
/**
 * Created by PhpStorm.
 * User: windbamboo
 * Date: 2016/12/9
 * Time: 15:27
 */
function f1()
{
    echo "<br />函数f1被调用;";
}

$str1 = "f1";
$str1();//调用可变函数（实际本身是普通函数）

$str2 = function () {
    echo "<br />匿名函数1被调用;";
};

//再来一个有用的函数
echo "<hr />";

$a1 = array(1, 2, 3, 4, 5, 1);
$str2();//调用匿名函数，形式跟调用可变函数一样
echo "<hr />";

$s = call_user_func_array(function () {
    $arr = func_get_args();    //取得传递过来的所有实参
    $sum = 0;
    foreach ($arr as $value) {
        var_dump($value);
        $sum += $value;
    }
    return $sum;
}, $a1);
echo "<br/>和为" . $s;
//继续将上一个例子改造为更好的形式：

$fun1 = function () {
    $arr = func_get_args();    //取得传递过来的所有实参
    $sum = 0;
    foreach ($arr as $value) {
        var_dump($value);
        $sum += $value;
    }
    return $sum;
};
$a1 = array(1, 2, 3, 4, 5, 1);
$s2 = call_user_func_array($fun1, $a1);
echo "<br/>和为s2=$s2";

