<?php
/**
 * Created by PhpStorm.
 * User: windbamboo
 * Date: 2016/10/10
 * Time: 23:09
 */

$arr1 = array(5, "aa" => "22", 12, 'd1' => 'abc');
foreach ($arr1 as $key => $value) {
    echo "<br/>下标:$key,值: $value";
}

echo $arr1['ddd'];
echo "<br/>";
echo $arr1[8];