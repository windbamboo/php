<?php
/**
 * Created by PhpStorm.
 * User: windbamboo
 * Date: 2016/12/8
 * Time: 13:32
 */

//课堂/课间案例：
//任意给出一个年份和一个月份，输出该月的天数

$year = 2012;
$month = 2;
switch ($month) {
    case 1:
        echo "31天";
        break;
    case 2:
        if (isRunnian($year)) {
            echo "29天";
        } else {
            echo "28天";
        }
        break;
    case 3:
        echo "31天";
        break;
    case 4:
        echo "30天";
        break;
    case 5:
        echo "31天";
        break;
    case 6:
        echo "30天";
        break;
    case 7:
        echo "31天";
        break;
    case 8:
        echo "31天";
        break;
    case 9:
        echo "30天";
        break;
    case 10:
        echo "31天";
        break;
    case 11:
        echo "30天";
        break;
    case 12:
        echo "31天";
        break;
    default:
        echo "year invalid";
        break;

}
//方法2：
echo "<hr />";

switch ($month) {
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        echo "31天";
        break;
    case 2:
        if (isRunnian($year)) {
            echo "29天";
        } else {
            echo "28天";
        }
        break;

    case 4:
    case 6:
    case 9:
    case 11:
        echo "30天";
        break;
    default:
        echo "year invalid";
        break;

}

//方法3：
echo "<hr />";
if ($year > 12 || $year < 1) {
    echo "year invalid";
} else if ($year == 1 || $year == 3 || $year == 5 || $year == 7 || $year == 8 || $year == 10 || $year == 12) {
    echo "31天";

} else if ($year == 4 || $year == 6 || $year == 9 || $year == 11) {
    echo "30天";
} else if ($year == 2) {
    if (isRunnian($year)) {
        echo "29天";
    } else {
        echo "28天";
    }
}

function isRunnian($year)
{
    if ($year % 4 == 0 && $year % 100 != 0 || $year % 400 == 0) {
        return true;
    }
    return false;
}
