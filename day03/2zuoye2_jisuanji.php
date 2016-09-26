<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title>网页标题</title>
    <meta name="keywords" content="关键字列表"/>
    <meta name="description" content="网页描述"/>
    <link rel="stylesheet" type="text/css" href=""/>
    <style type="text/css"></style>
    <script type="text/javascript"></script>
</head>
<body>
<?php

$data1 = "";
$data2 = "";
$fuhao = "";
$result = "";
var_dump($_POST);
if ($_POST) {
    $data1 = $_POST['data1'];
    $data2 = $_POST['data2'];
    $fuhao = $_POST['fuhao'];
    if (is_numeric($data1) && is_numeric($data2)) {
        switch ($fuhao) {
            case '+':
                $result = $data1 + $data2;
                break;
            case '-':
                $result = $data1 - $data2;
                break;
            case '*':
                $result = $data1 * $data2;
                break;
            case '/':
                if ($data2 == 0) {
                    $result = "除数不能为0";
                } else {
                    $result = $data1 / $data2;
                }
                break;
        }
        echo "计算结果为： $result";

    } else {
        echo "请输入数字进行计算";
    }

} else {
    echo "请从正确的页面输入数据并提交！";
}

?>
<form action="2zuoye2_jisuanji.php" method="post">
    <input type="text" name="data1" value="<?php echo $data1; ?>"/>
    <select name="fuhao">
        <option value="+" <?php if ($fuhao == "+") echo "selected=\"selected\"" ?>>+</option>
        <option value="-"<?php if ($fuhao == "-") echo "selected=\"selected\"" ?>>-</option>
        <option value="*"<?php if ($fuhao == "*") echo "selected=\"selected\"" ?>>*</option>
        <option value="/"<?php if ($fuhao == "/") echo "selected=\"selected\"" ?>>/</option>
    </select>
    <input type="text" name="data2" value="<?php echo $data2; ?>"/>
    <input type="submit" value="提交"/>
</form>
</body>
</html>