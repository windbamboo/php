<?php
/**
 * Created by PhpStorm.
 * User: windbamboo
 * Date: 2016/12/12
 * Time: 13:44
 */
//求该数组中的最大值：
$arr1 = array(2, 5, 6, 2, 9, 4);
$max = $arr1[0];
$len = count($arr1);
for ($i = 0; $i < $len; $i++) {
    if ($arr1[$i] > $max) {
        $max = $arr1[$i];
    }
}
echo "<br/>最大值为:$max";
$arr2 = array(array(3, 5, 6, 33, 44, 55)
, array(2, 9, 4, 22),
    array(5, 2, 11)
);

var_dump($arr2);
$max = $arr2[0][0];
$len = count($arr2);
for ($i = 0; $i < $len; $i++) {
    $len2 = count($arr2[$i]);
    for ($j = 0; $j < $len2; $j++) {
        if ($arr2[$i][$j] > $max) {
            $max = $arr2[$i][$j];
        }
    }
}
echo "<br />最大值为：$max";

