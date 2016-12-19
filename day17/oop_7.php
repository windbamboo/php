<?php

/**
 * Created by PhpStorm.
 * User: sundy
 * Date: 2016/12/19
 * Time: 13:47
 */
interface  I_Goods
{

    public function setName($name);

    public function setPrice($name);
}

abstract class  Goods implements I_Goods
{

}