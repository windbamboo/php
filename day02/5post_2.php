<?php

var_dump($_POST);

if ($_POST) { //如果有post数据
    $data1 = $_POST['n1']; //相应接收每个表单项的数据值
    $data2 = $_POST['n2'];  //特别注意：表单项的值字符串类型
    $fuhao = $_POST['yunsuanfu'];

    if (is_numeric($data1) && is_numeric($data2)) {
        switch ($fuhao) {
            case "+":
                $result = $data1 + $data2;
                break;
            case "-":
                $result = $data1 - $data2;
                break;
            case "*":
                $result = $data1 * $data2;
                break;
            case "/":
                if ($data2 == 0) {
                    $result = "除数不能为0";
                }
                $result = $data1 / $data2;
                break;
        }
        echo "计算结果为:$result";
    } else {  //否则：
        echo "请输入数字进行计算";
    }
} else {
    echo "请从正确的页面输入数据并提交！";
}



