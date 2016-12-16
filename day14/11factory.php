<?php


class factory
{
    //Instance表示“实例”，“对象”
    static function getInstance($className)
    {
        if (file_exists('./class/' . $className . ".class.php")) {
            $obj1 = new $className();
            return $obj1;
        } else {
            return null;//也可以die();
        }

        if (file_exists('./class' . $className . '.class.php')) {
            $obj1 = new $className();
            return $obj1;
        } else {
            return null;
        }
    }
}

$obj1 = factory::getInstance("A");//获取类A的一个对象
$obj2 = factory::getInstance("B");//获取类B的一个对象
$obj3 = factory::getInstance("A");//再获取类A的一个对象