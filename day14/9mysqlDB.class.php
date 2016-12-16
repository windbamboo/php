<?php

/**
 * Created by PhpStorm.
 * User: sundy
 * Date: 2016/12/15
 * Time: 17:54
 */
class mysqlDB
{
    public $host;
    public $port;
    public $usename;
    public $password;
    public $charset;
    public $dbname;

    static $link;

    public function __construct($config)
    {
        $this->host = isset($config['host']) ? $config['host'] : 'localhost';
        $this->port = isset($config['port']) ? $config['port'] : '3306';
        $this->usename = isset($config['usename']) ? $config['usename'] : 'root';
        $this->password = isset($config['password']) ? $config['password'] : '';
        $this->charset = isset($config['charset']) ? $config['charset'] : '';
        $this->dbname = isset($config['dbname']) ? $config['dbname'] : '';
        self::$link = $this->connect();
    }

    public function connect()
    {
        $link = mysqli_connect("$this->host:$this->port", "$this->usename", "$this->password");
        return $link;
    }

    public function setCharset($charset)
    {
        mysqli_set_charset($this->charset, self::$link);
    }

    public function selectDb($dbname)
    {
        mysqli_set_charset($this->dbname, self::$link);
    }
}

$config = array('host' => 'localhost', 'port' => 3306, "usename" => 'root', 'password' => '', 'charset' => 'utf-8', 'dbname' => 'wiki');

var_dump($config);
$conn = new mysqlDB($config);
var_dump($conn);
$i = 0;
foreach ($conn::$link->query('select now()') as $row) {
    $results[$i] = $row;
    echo var_dump($results[$i]);
    $i++;
}
