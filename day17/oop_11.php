<?php
/**
 * Created by PhpStorm.
 * User: sundy
 * Date: 2016/12/19
 * Time: 13:48
 */

//学生起来

$s_data = file_get_contents('./student_sleep.txt');
var_dump($s_data);
require './Student.class.php';
$s = unserialize($s_data);
$s->decrement(200);
var_dump($s);