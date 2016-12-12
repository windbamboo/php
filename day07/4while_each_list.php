<?php
/**
 * Created by PhpStorm.
 * User: windbamboo
 * Date: 2016/12/12
 * Time: 13:45
 */
$arr1 = array(3, 8 => 5, 'dd1' => 6, 2, 11 => 9, 4);
//取得数组的当前项的下标和值
//并放入数组$a1,并移动指针到下一个
$a1 = each($arr1);
echo "<pre>";
print_r($a1);
echo "</pre>";
$a2 = each($arr1);
echo "<pre>";
print_r($a2);
echo "</pre>";


$arr2 = array(5, 15, 3, 4);

list($v1, $v2, $v3, $v4) = $arr2;
echo "<br />v1=$v1, v2=$v2,v3=$v3,v4=$v4";

$arr2 = array(3 => 5, 1 => 3, 0 => 15, 2 => 4);

list($v1, $v2, $v3, $v4) = $arr2;
echo "<br />v1=$v1, v2=$v2,v3=$v3,v4=$v4";
