<?php
/**
 * Created by PhpStorm.
 * User: windbamboo
 * Date: 2016/9/21
 * Time: 16:57
 */

$arr1 = array('PHP_SELF', 'DOCUMENT_ROOT', 'SERVER_NAME', 'REMOTE_ADDR', 'SERVER_ADDR');
$arr2 = array('网页路径', '站点路径', '服务器名', '客户端ip', '服务器端IP');

echo "<table>";
foreach ($arr1 as $key => $value) {
    echo "<tr>";
    echo "<td>$arr2[$key]</td>";
    echo "<td>$_SERVER[$value]</td>";
    echo "</tr>";
}
echo "</table>";