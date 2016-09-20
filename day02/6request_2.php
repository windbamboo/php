<?php


echo "<pre>";
var_dump($_GET);
echo "</pre>";

echo "<pre>";
var_dump($_POST);
echo "</pre>";

echo "<pre>";
var_dump($_REQUEST);
echo "</pre>";

//理解：
unset($_GET);
echo "销毁$_GET数据之后";

echo "<pre>GET::<BR/>>";
var_dump($_GET);
echo "</pre>";

echo "<pre>REQUEST::<BR/>";
var_dump($_REQUEST);
echo "</pre>";
