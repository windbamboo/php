<?php
/**
 * Created by PhpStorm.
 * User: windbamboo
 * Date: 2016/12/9
 * Time: 11:42
 */
echo "<p>代码(1)</p>";
$m = 10;
include '.page3ddd.php';
//不存在的文件
//这里报错，但会继续执行后续代码
echo "<p>代码(2)</p>";
require './page3dddd.php';
//不存在的文件
//这里报错，并不再执行后续代码
echo "<p>m=$m</p>";
echo "<p>m2=$m</p>";
echo "<p>代码(3)</p>";

