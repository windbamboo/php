<?php
/**
 * Created by PhpStorm.
 * User: sundy
 * Date: 2016/12/8
 * Time: 15:53
 */
//求123左移3位和右移3位值；
$v1 = 123;
$r1 = $v1 << 3;
$r2 = $v1 >> 3;
echo "r1=$r1,r2=$r2";
//实际上，左移n位就是连续乘n次的2
//右移n位就是连续除n次的2（每次都舍去小数部分）
/*
一个小球从空中掉下来，求如下问题：
a)如果已知小球掉落时高度为1000m，求其触地瞬间的速度；
b)如果已知小球落地瞬间的速度（1000m/s），求其掉落时的高度）
附自由落体公式：自由落体的速度规律：v=gt，自由落体的位移规律：h=gt^2/2。；（其中g是重力加速度，在地球上g≈9.8m/s2；v是速度，h高度，t是时间）
*/
echo "<hr/>";
const  G = 9.8;
$h = 1000;//已知高度
$t = pow(2 * $h, 1 / 2); //求得时间
$v = G * $t;//求得触地速度
echo "v=$v";
$n = 4;
echo "<hr/>";
for ($i = 0; $i <= $n; $i++) {
    for ($k = 1; $k <= $i; $k++) {
        echo "*";
    }
    echo "<br/>";
}
echo "<br/>";

for ($i = 0; $i <= $n; $i++) {
    for ($k = 1; $k <= 2 * $i - 1; $k++) {
        echo "*";
    }
    echo "<br/>";
}
echo "<br/>";


for ($i = 0; $i <= $n; $i++) {
    for ($k = 1; $k <= $n - $i; $k++) {
        echo "&nbsp;";
    }
    for ($k = 1; $k <= 2 * $i - 1; $k++) {
        echo "*";
    }
    echo "<br/>";
}
echo "<br/>";


//E图案
echo '<br />';
for ($i = 1; $i <= $n; ++$i) {    //确定要输出的行数（行号）
    //先输出若干个空格：
    for ($m = 1; $m <= $n - $i; ++$m) {
        echo "&nbsp;";
    }
    for ($k = 1; $k <= 2 * $i - 1; ++$k) {//确定一行要输出的个数
        if ($k == 1 || $k == 2 * $i - 1) {//如果是第一个或最后一个
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br />";
}


//F图案
echo '<br />';
for ($i = 1; $i <= $n; ++$i) {    //确定要输出的行数（行号）
    //先输出若干个空格：
    for ($m = 1; $m <= $n - $i; ++$m) {
        echo "&nbsp;";
    }
    for ($k = 1; $k <= 2 * $i - 1; ++$k) {//确定一行要输出的个数
        if ($i == $n) {//最后一行的情形：
            echo "*";
        } else {
            if ($k == 1 || $k == 2 * $i - 1) {//如果是第一个或最后一个
                echo "*";
            } else {
                echo "&nbsp;";
            }
        }
    }
    echo "<br />";
}


//G图案：
echo '<br />';
for ($i = 1; $i <= $n; ++$i) {    //确定要输出的行数（行号）
    //先输出若干个空格：
    for ($m = 1; $m <= $n - $i; ++$m) {
        echo "&nbsp;";
    }
    for ($k = 1; $k <= 2 * $i - 1; ++$k) {//确定一行要输出的个数
        if ($k == 1 || $k == 2 * $i - 1) {//如果是第一个或最后一个
            echo "*";
        } else {
            echo "&nbsp;";
        }
    }
    echo "<br />";
}

for($i = $n-1; $i >= 1; --$i){	//确定要输出的行数（行号）
    //先输出若干个空格：
    for($m = 1; $m <= $n-$i; ++$m){
        echo "&nbsp;";
    }
    for($k = 1; $k <= 2*$i-1; ++$k){//确定一行要输出的个数
        if($k == 1 || $k == 2*$i-1){//如果是第一个或最后一个
            echo "*";
        }
        else{
            echo "&nbsp;";
        }
    }
    echo "<br />";
}

echo "<hr />";