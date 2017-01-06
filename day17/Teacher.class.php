<?php

/**
 * Created by PhpStorm.
 * User: sundy
 * Date: 2016/12/23
 * Time: 11:06
 */
class  Teacher
{


    private $name;

    private $age;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    function say()
    {
        echo "<br/>hello";
    }

}