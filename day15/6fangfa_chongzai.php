<?php
/**
 * Created by PhpStorm.
 * User: sundy
 * Date: 2016/12/16
 * Time: 15:01
 */
function f1()
{
    echo "<br />f1函数被执行（任务完成）";
}

function f2($x, $y)
{
    echo "<br />f1函数被执行（任务完成）";
    return $x + $y;
}

class  A
{
    public $p1 = 1;
    //当使用一个对象调用一个不存在的方法时，就会自动调用本方法
    //其中$name就是本来要调用的方法名
    //$array就是本来调用该方法时使用的实参数据，都装入该数组
    function __call($name, $arguments)
    {
        $count = count($arguments);
        if ($count == 0) {
            f1();
        } else if ($count == 2) {
            return f2($arguments[0], $arguments[1]);
        }
    }

}
$o1 = new A();
$o1->f1();		//不存在的方法，不带实参
$v1 = $o1->f1(1,2);	//不存在的方法，并带2个实参
echo "<br />o1里面的p1=" . $o1->p1;
echo "<br />结果v1=" . $v1;