<?php
/**
 * Created by PhpStorm.
 * User: sundy
 * Date: 2016/12/19
 * Time: 13:47
 */

// 模块kang
// 载入模块kang.php 核心文件
require './kang/kang.php';

$o = new H;
var_dump($o);

echo '<br>';
// 模块user
require './user/user.php';
$b = new U;
var_dump($b);