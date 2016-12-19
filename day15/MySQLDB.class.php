<?php

/**
 * Created by PhpStorm.
 * User: sundy
 * Date: 2016/12/16
 * Time: 15:02
 */
class MySQLDB
{
    public $host;
    public $port;
    public $username;
    public $password;
    public $charset;
    public $dbname;

    //连接结果（资源）
    private static $link;

    private $resourc;

    public static function getInstance($config)
    {
        if (!isset(self::$link)) {
            self::$link = new self($config);
        }
        return self::$link;
    }

    //构造函数：禁止new
    private function __construct($config)
    {
        //初始化数据
        $this->host = isset($config['host']) ? $config['host'] : 'localhost';
        $this->port = isset($config['port']) ? $config['port'] : '3306';
        $this->username = isset($config['username']) ? $config['username'] : 'root';
        $this->password = isset($config['password']) ? $config['password'] : '';
        $this->charset = isset($config['charset']) ? $config['charset'] : 'utf8';
        $this->dbname = isset($config['dbname']) ? $config['dbname'] : '';

        //连接数据库
        $this->connect();
        //设定连接编码
        $this->setCharset($this->charset);
        //选定数据库
        $this->selectDb($this->dbname);
    }

    //禁止克隆
    private function __clone()
    {
    }

    //这里进行连接
    public function connect()
    {
        $this->resourc = mysql_connect("$this->host:$this->port", "$this->username", "$this->password") or die("连接数据库失败！");
    }

    public function setCharset($charset)
    {
        //mysql_set_charset($charset, $this->resourc);
        $this->query("set names $charset");
    }

    public function selectDb($dbname)
    {
        //mysql_select_db($dbname, $this->resourc);
        $this->query("use $dbname;");
    }

    /**
     * 功能：执行最基本（任何）sql语句
     * 返回：如果失败直接结束，如果成功，返回执行结果
     */
    public function query($sql)
    {
        if (!$result = mysql_query($sql, $this->resourc)) {
            echo("<br />执行失败。");
            echo "<br />失败的sql语句为：" . $sql;
            echo "<br />出错信息为：" . mysql_error();
            echo "<br />错误代号为：" . mysql_errno();
            die();
        }
        return $result;
    }

    /**
     * 功能：执行select语句，返回2维数组
     * 参数：$sql 字符串类型 select语句
     */
    public function getAll($sql)
    {
        $result = $this->query($sql);
        $arr = array();    //空数组
        while ($rec = mysql_fetch_assoc($result)) {
            $arr[] = $rec;//这样就形成二维数组
        }
        return $arr;
    }

    //返回一行数据（作为一维数组）
    public function getRow($sql)
    {
        $result = $this->query($sql);
        //$rec = array();
        if ($rec2 = mysql_fetch_assoc($result)) {//返回下标为字段名的数组
            //如果fetch出来有数据（也就是取得了一行数据），结果自然是数组
            return $rec2;
        }
        return false;
    }
    //返回一个数据（select语句的第一行第一列）
    //比如常见的：select count(*) as c from XXX where ...
    public function getOne($sql)
    {
        $result = $this->query($sql);
        $rec = mysql_fetch_row($result);//返回下标为数字的数组,且下标一定是0,1,2, 3.....
        //如果没有数据，返回false
        if ($rec === false) {
            return false;
        }
        return $rec[0];    //该数组的第一项。

    }

}
