<!--单例模式(Singleton Pattern)：顾名思义，就是只有一个实例。-->
<!--作为对象的创建模式，单例模式确保某一个类只有一个实例，而且自行实例化并向整个系统提供这个实例。-->
<!---->
<!--单例模式也细分为懒汉模式和饿汉模式，感兴趣的朋友可以去了解一下。这里阐述的代码实现是懒汉模式-->
<!---->
<!--为什么用单例        ---------------------->
<!--实际项目中像数据库查询，日志输出，全局回调，统一校验等模块。这些模块功能单一，但需要多次访问，如果能够全局唯一，多次复用会大大提升性能。这也就是单例存在的必要性。-->
<!---->
<!--单例模式的好处：-->
<!---->
<!--1：减少频繁创建，节省了cpu。-->
<!---->
<!--2：静态对象公用，节省了内存。-->
<!---->
<!--3：功能解耦，代码已维护。-->
<!---->
<!--如何设计单例-->
<!--通过上面的描述，单例的核心是，实例一次生成，全局唯一，多次调用。因此在单例模式必须包含三要素：-->
<!---->
<!--1：私有化构造函数，私有化clone。也就是不能new，不能clone。【唯一】-->
<!---->
<!--2：拥有一个静态变量，用于保存当前的类。【唯一如何保存】-->
<!---->
<!--3：提供一个公共的访问入口。【可以访问】-->

<?php

class caoyiSingleton
{
    //私有化构造方法
    private function __construct()
    {

    }

    //私有化clone方法
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    //保存实例的静态对象
    public static $singleInstance;

    public static function getInstance()
    {
        if (!self::$singleInstance) {
            self::$singleInstance = new self();
        }

        return self::$singleInstance;
    }

    //调用简单的方法
    public function singletonFunc()
    {
        echo "call single ton method";
    }
}

$singleInstance = caoyiSingleton::getInstance();
$singleInstance->singletonFunc();

$singleInstance2 = caoyiSingleton::getInstance();
$singleInstance2->singletonFunc();

//检验是否是一个实例
var_dump($singleInstance === $singleInstance2);  //true ,一个对象
