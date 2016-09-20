<?php
/**
 * Created by PhpStorm.
 * User: windbamboo
 * Date: 2016/9/20
 * Time: 23:05
 */
echo "<pre>";
//var_dump($_SERVER);    //这种形式不太好看
echo "</pre>";
//改造如下：

echo "<table border='1'>";
foreach ($_SERVER as $key => $value) {
    echo "<tr>";
    echo "<td>$key</td>";
    echo "<td>$value</td>";
    echo "</tr>";
}
echo "</table>";
