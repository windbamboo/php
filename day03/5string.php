<?php
/**
 * Created by PhpStorm.
 * User: windbamboo
 * Date: 2016/10/10
 * Time: 23:06
 */

$s1 = "php34.com";
//单引号字符串：
//可以识别（需要使用）的转义符有： \\	\'
//转义符：就是用来表达 一直特殊符号的字符形式
$str1 = 'ab\nc"d\'efg:$s1';
echo "<p>$str1</p>";