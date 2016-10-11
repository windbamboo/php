<?php
/**
 * Created by PhpStorm.
 * User: windbamboo
 * Date: 2016/10/10
 * Time: 23:18
 */

$v1 = (int)7.8;
$v2 = (float)$v1;
echo "<br/>v1的值为:$v1,类型为:" . gettype($v1);
echo "<br/>v2的值为:$v2,类型为:" . gettype($v2);


$v1 = (int)7.8;//此时 $v1是 int类型
$v2 = (float)$v1;//此时 $v2是float类型，但$v1还是int类型
settype($v1, "float");	//此时 $v1就是 flaot类型了
echo "v1类型为:".gettype($v1);





