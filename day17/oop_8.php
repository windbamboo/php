<?php

/**
 * Created by PhpStorm.
 * User: sundy
 * Date: 2016/12/19
 * Time: 13:47
 */
interface  I_Goods
{

}

abstract class  Goods implements I_Goods
{

    function userAutoload($class_name)
    {
        echo 'userAutoload<br>';
    }


}

class  A extends Goods
{

    public function setName($name)
    {
        echo "<br/>set Name";
    }

    public function setPrice($name)
    {
        echo "<br/>set Price";
    }
}


function __autoload($className)
{
    echo "<br/>autoload";
    $file = $className . ".class.php";
    if (is_file($file)) {
        require_once($file);
    }
}

$a = new A();
$a->setName("xxxx");

$teacher =new Teacher();
$teacher->say();