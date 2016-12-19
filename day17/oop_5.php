<?php

/**
 * Created by PhpStorm.
 * User: sundy
 * Date: 2016/12/19
 * Time: 13:47
 */
class H
{

    public function HgetP()
    {
        echo $this->p;
        echo self::$sp;
    }

    /*public static function HgetP()
    {
        // echo $this->p;
        echo self::$sp;
    }*/

}

class Z extends H
{
    protected $p = 'value';
    public static $sp = 'static-value';

    public function ZgetP()
    {
        echo self::$sp;
    }

    /* public static function ZgetP()
     {
         //echo $this->p;
         echo self::$sp;
     }*/
}


echo H::HgetP();
echo Z::ZgetP();
echo K::KgetP();