<?php
/**
 * Created by PhpStorm.
 * User: windbamboo
 * Date: 2016/12/12
 * Time: 13:45
 */

$arr2 = array(5, 15, 3, 4);
foreach ($arr2 as $key => $value) {
    $value *= 2;
    echo "<br/> $key=$value";
}
echo "<br/> ";
print_r($arr2);
$arr2 = array(5, 15, 3, 4);
foreach ($arr2 as $key => $value) {
    $value *= 2;
    echo "<br/> $key=$value";
}
echo "<br/> ";
print_r($arr2);

$arr2 = array(5, 15, 3, 4);//原数组
echo "<br/>--index1 " . key($arr2);
$arr2[] = 201;
$arr2[] = 202;
$arr2[] = 203;
$arr2[] = 204;
echo "<br/>--index2 " . key($arr2);


$arr3[] = 301;
$arr3[] = 302;
$arr3[] = 303;
$arr3[] = 304;
var_dump($arr3);
echo "<br/>--index3 " . key($arr2);

foreach ($arr2 as $key => $value) {
    echo "<br/>--index4 " . key($arr2);
    if ($key == 1) {
        $arr2[] = 100;
        $arr2[] = 101;
        $arr2[] = 102;
        echo "<br/>--index5 " . key($arr2);
    }
    echo "<br/> $key=>$value";

}
echo "<pre>";
print_r($arr2);
echo "</pre>";
$key1 = key($arr2);
$value1 = current($arr2);
echo "<br/>key1=$key1,value1=$value1;";