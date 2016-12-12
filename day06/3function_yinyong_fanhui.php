<?php
/**
 * Created by PhpStorm.
 * User: windbamboo
 * Date: 2016/12/9
 * Time: 15:27
 */

function &f1($p1, $p2)
{
    static $result = 0;
    //定义为静态变量，此时该变量的值就会“保留”
    //即不会随着函数结束而销毁，而是会一直“持有”该值
    //而且，第二次及以后再调用该函数，也不会初始化了
    //第一次应该是0，第二次应该是6
    echo "<br/>result =$result";
    $h = $p1 * $p1 + $p2 * $p2;
    $result = pow($h, 0.5);
    return $result;
}

//这里的引用，体现为$v1和函数中的$result指向同一个数据
$v1 =& f1(3, 4);
echo "<br/> v1=$v1";
//应该是5
$v1++;    //应该是6了
//则按理来说，这里$result也自加了，但这里并不能表现出来，
$v2 = &f1(4, 5);    //再调用一次，去函数中输入$result;
echo "<br/> v2=$v2";
