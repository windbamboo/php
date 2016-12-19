<?php
/**
 * Created by PhpStorm.
 * User: sundy
 * Date: 2016/12/19
 * Time: 16:01
 */

//phpinfo();

$redis = new Redis();
$redis->connect('127.0.0.1', 6379);
$redis->select(3);
//var_dump($redis);
$redis->set("flower", 1);
$redis->delete("flower");
echo "<br/>key get:" . $redis->get("flower");
echo "<br/>匹配指定所有模式的key" . var_dump($redis->keys("flo*"));
$redis->set("flowerrename", "xxxxx");
$redis->set("flowerrename2", "xxxxx");
echo "<br/>rename" . $redis->rename("flowerrename","newName");
echo "<br/>key get:" . $redis->get("newName");

echo "<br/>db size:" . $redis->dbSize();
echo "<br/>express key:" . $redis->expire("newName",10);
//sleep(5);
echo "<br/>key ttl :" . $redis->ttl("newName");

echo "<br/>key get newname:" . $redis->get("newName");

$redis->select(100);


$redis->set("flower", 1);
$redis->delete("flower");

$redis->mset(array("sundy" => "liuguozhu", "manman" => "喜羊羊"));
var_dump($redis->mget(array("sundy", "manman")));
echo "<br/>key exists:" . $redis->exists("flower");
echo "<br/>存放数据类型key type:" . $redis->type("sundy");


echo "<br/>:" . $redis->get("flower");