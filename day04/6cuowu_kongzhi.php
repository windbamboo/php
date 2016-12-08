<?php
/**
 * Created by PhpStorm.
 * User: windbamboo
 * Date: 2016/12/8
 * Time: 13:32
 */
$link = @mysql_connecti("127.0.0.1", "root", "") or die("链接数据库失败");
var_dump($link);