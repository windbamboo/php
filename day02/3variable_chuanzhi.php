<?php
/**
 * Created by PhpStorm.
 * User: liuguozhu
 * Date: 2016/9/20
 * Time: 22:20
 */
$v1 = 1;
$v2 = $v1;//此时发生传值问题
$v3 = $v1 + 10;//此时没有传值问题
$v2++;
echo "<br/>v1=$v1,v2=$v2";

echo "<br/>";
echo "<br/>";
echo "<br/>";

$v10 = 10;
$v20 =& $v10;//此时发生传值问题,注意符号：&
$v20++;
echo "<br/>v10=$v10,v20=$v20";

echo "<br/>";

unset($v20);
echo "<br/>v10=$v10,v20=$v20";
