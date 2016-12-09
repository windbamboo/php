<?php
/**
 * Created by PhpStorm.
 * User: windbamboo
 * Date: 2016/12/9
 * Time: 14:07
 */
//1：设定错误由我们自定义函数来处理：set_error_handler("函数名");
set_error_handler("myError");
//2：定义该函数，带4个参数：function errorHandler($errNo, $errMsg, $errFile, $errLine){...}

//有意义的错误处理函数，都应该带如下4个形参：
//$errNo错误号，就是错误级别的常量,
//$errMsg错误提示信息,
//$errFile错误所在文件名,
//$errLine错误所在行
function myError($errNo, $errMsg, $errFile, $errLine)
{
    echo "<h4>大事不好了：文件($errFile)的第($errLine)行发生错误：</h4>";
    echo "错误号为：$errNo, 错误提示信息为：$errMsg";
}

//这里发生错误：
echo $v1;    //一个错误：未定义的变量
//触发一个自定义错误：
//假设用户输入的年龄数据为$age
$age = 188;
if ($age >= 0 && $age <= 100) {
    echo "<br />年龄合乎逻辑，继续处理后续工作....";
} else {
    trigger_error("年龄数据不符合要求！", E_USER_WARNING);
}

$m = func1();    //严重错误：调用不存在的函数
echo "<br />普通正确输出;";