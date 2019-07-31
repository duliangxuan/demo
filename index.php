<?php
//创建自己的框架可以使用该方法引用bootstrap的类
//function __autoload($class){
//
//}
//
//spl_autoload_register();
include "vendor/autoload.php";
core\Bootstrap::run();
