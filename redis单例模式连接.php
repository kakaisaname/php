<?php
/**
 * Created by PhpStorm.
 * User: caoyi
 * Date: 2018/8/17
 * Time: 9:58
 */
namespace app\common;

class redis
{
    public static $_instance = null;
    private static $config;
    //定义一个私有的构造函数，确保单例类不能通过new关键字实例化，只能被其自身实例化
    public function __construct()
    { //私有的构造方法
        self::$_instance = new \Redis();
        self::$_instance->connect(self::$config['host'], self::$config['port']);
    }

    //获取静态实例
    public static function getRedis()
    {
        $config['host'] = config('app.cache.redis.host');
        $config['port'] = config('app.cache.redis.port');
        if (!self::$_instance) {
            self::$config = $config;
            new self;
        }
        return self::$_instance;
    }

    /*
     * 禁止clone
     */
    private function __clone()
    {
    }
}