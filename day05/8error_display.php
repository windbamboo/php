<?php
/**
 * Created by PhpStorm.
 * User: windbamboo
 * Date: 2016/12/9
 * Time: 14:06
 */

ini_set('display_errors', true);
echo '<h3>3中常见系统错误</h3>';
echo $var1; //使用不存在的变量
echo "正确代码1";
include 'no-file.php'; //包含不存在的文件
echo "<br />正确代码2";
$m = func1(); //调用不存在的函数
echo "<br />正确代码3";
