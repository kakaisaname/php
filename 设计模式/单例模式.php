<?php
/**
 * Created by PhpStorm.
 * User: caoyi
 * Date: 2018/12/26
 * Time: 13:58
 */
//一个类只允许实例化一次：如数据库类
class Database{
    private $instance;
    public function __construct(){}
    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }
}