<?php
/**
 * Created by PhpStorm.
 * User: liuguozhu
 * Date: 2016/9/19
 * Time: 17:15
 */
echo date_default_timezone_set('PRC');
date_default_timezone_set('PRC');

//测试php代码可执行
$i = 10;
$i++;
echo "<h3>abcd--$i</h3>";
//显示当前时间（测试时间配置）：
echo date("Y-m-d H:i:s");
//连接mysql数据库（测试数据库配置）：
$con = mysqli_connect("localhost", "root", "xxxxxx");
echo "<hr/>";
var_dump($con);

