<?php
/**
 * Created by PhpStorm.
 * User: sundy
 * Date: 2016/12/16
 * Time: 15:01
 */
require 'MySQLDB.class.php';
$config = array(
    'host' => 'localhost',
    'port' => '3306',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    'dbname' => 'wiki'
);
$link = MySQLDB::getInstance($config);
var_dump($link);

//任务1；插入数据：

$sql ="INSERT money (`zhanghu`, `cunkuan`) VALUES ('zhanghu', 1000) ;";

if ($link->query($sql)){
    echo "执行成功";
}
//任务2；获取所有帐户信息：
$sql ="";