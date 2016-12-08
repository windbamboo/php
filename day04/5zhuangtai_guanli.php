<?php
/**
 * Created by PhpStorm.
 * User: windbamboo
 * Date: 2016/12/8
 * Time: 14:22
 */
//表示5个原始数据

const  D1 = 1;
const  D2 = 2;
const  D3 = 4;
const  D4 = 8;
const  D5 = 16;
$state = D1 | D2 | D3 | D4 | D5;
echo $state;
//需求1：判断灯泡1的状态：
if ($state & D1 > 0) {
    echo "<br />灯1亮";
} else {
    echo "<br />灯1灭";
}

if ($state & D2 > 0) {
    echo "<br />灯2亮";
} else {
    echo "<br />灯2灭";
}

if ($state & D3 > 0) {
    echo "<br />灯3亮";
} else {
    echo "<br />灯3灭";
}

if ($state & D1 > 0) {
    echo "<br />灯4亮";
} else {
    echo "<br />灯4灭";
}

if ($state & D1 > 0) {
    echo "<br />灯5亮";
} else {
    echo "<br />灯5灭";
}

showAll($state);
function showAll($state)
{
    echo "<p>";
    for ($i = 1; $i <= 5; $i++) {
        $temp = "D" . $i;
        if ($state & $temp > 0) {
            echo "<br />灯" . $i . "亮";
        } else {
            echo "<br />灯" . $i . "灭";
        }
    }
    echo "</p>";

}
