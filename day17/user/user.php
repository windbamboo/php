<?php
echo __FILE__;//取得当前文件的绝对地址

echo "<br>";

echo dirname(__FILE__);//取得当前文件所在的绝对目录

echo "<br>";

echo dirname(dirname(__FILE__));//再取得当前文件的上一层目录名

echo "<br>";

echo $_SERVER['DOCUMENT_ROOT'];//取服务器的根目录
//set_include_path(get_include_path() . PATH_SEPARATOR .$_SERVER['DOCUMENT_ROOT']);
function userAutoload($class_name) {
	echo '<br/>userAutoload<br>';
    require './user/' . $class_name . '.class.php';
}
spl_autoload_register('userAutoload');
