<?php

/**
 * Created by PhpStorm.
 * User: sundy
 * Date: 2016/12/19
 * Time: 13:48
 */
class  Student
{
    const  GENDER_MANE = 1;
    const  GENDER_FEMALE = 2;
    const  GENDER_SECRET = 3;

    private $_gender;
    private $_name;
    private $_age = 30;

    public function __construct($name, $gender = 3, $age = 0)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->age = $age;
    }

    public function setGender($gender)
    {
        if (in_array($gender, array(self::GENDER_MANE, self::GENDER_FEMALE, self::GENDER_SECRET))) {
            $this->gender = $gender;
        } else {
            trigger_error("设置的性别不正确", E_USER_WARNING);
        }
    }

}
// 实例化对象
$s1 = new Student('杨过', Student::GENDER_MANE, 24);
$s2 = new Student('小笼包', Student::GENDER_FEMALE, 27);
var_dump($s1);
$s1->setGender(Student::GENDER_SECRET);
