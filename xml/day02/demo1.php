<?php
/**
 * Created by PhpStorm.
 * User: sundy
 * Date: 2016/12/20
 * Time: 14:14
 */
echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';

$doc = new DOMDocument();
$doc->load("test.xml");


$title = $doc->getElementsByTagName("title");
$content = $doc->getElementsByTagName("content");
echo "title节点个数" . $title->length;
echo "content" . $content->length;

echo "<table width='300' border='1'>";
echo "<tr><th>title</th><th>content</th></tr>";
for ($i = 0; $i < $title->length; $i++) {
    echo "<tr><td>" . $title->item($i)->nodeValue . "</td ><td >" . $content->item($i)->nodeValue . "</td></tr>";

}
echo "</table>";

