<html>
<head>
    <script type="text/javascript">
        var v1 = 8.1 / 3;
        document.write("php中,8.1/3结果为" + v1);
        if ($v1 < 2.7) {
            document.write("<br/>php中,8.1/3小于2.7");
        }
        if (Math.round($v1 * 1000) === Math.round(2.7 * 1000)) {//假设精度要求为3位小数
            document.write("<br/>php中,8.1/3等于2.7（按3位精度）");
        } else {
            document.write("<br/>php中,8.1/3不等于2.7（按3位精度）");
        }
    </script>
</head>
<body>
<?php


$v1 = 8.1 / 3;
echo "<hr>php中,8.1/3结果为:" . $v1;
echo("<hr>php中,8.1/3结果为:" . $v1);
if ($v1 < 2.7) {
    echo("<br/>php中,8.1/3小于2.7");
}
if (round($v1 * 1000) === round(2.7 * 1000)) {//假设精度要求为3位小数
    echo("<br/>php中,8.1/3等于2.7（按3位精度）");
} else {
    echo("<br/>php中,8.1/3不等于2.7（按3位精度）");
}
?>
</body>

</html>

