<?php
/**
 * Created by PhpStorm.
 * User: windbamboo
 * Date: 2016/12/9
 * Time: 14:01
 */
echo "<h3>3中常见的用户错误</h3>";
trigger_error("用户提示性错误1", E_USER_NOTICE);
trigger_error("用户警告性错误2", E_USER_WARNING);
trigger_error("用户严重错误3", E_USER_ERROR);
//假设用户输入的年龄数据为$age
$age = 188;
if ($age >= 0 && $age <= 100) {
    echo "<br />年龄合乎逻辑，继续处理后续工作....";
} else {
    trigger_error("年龄数据不符合要求!", E_USER_WARNING);
}

echo "<h3>3中常见的系统错误</h3>";
echo $var1;                //使用不存在的变量
echo "正确代码1";
include 'no-file.php';    //包含不存在的文件
echo "<br />正确代码2";
$m = func1();            //调用不存在的函数
echo "<br />正确代码3";