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