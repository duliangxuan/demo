<?php
namespace core;
class  Bootstrap{
    public static function run(){
        session_start();
        self::parseUrl();
    }

    //分析URL生成控制器方法常量
    public static function parseUrl(){
        if(isset($_GET['s'])){
            //分析s变量生成控制器方法s=Index/show，要是有定义s就拆分，没有就访问默认控制器方法Index/show
            $info = explode('/',$_GET['s']);
            $class = '\web\controller\\'.ucfirst($info[0]);//ucfirst为了保证控制器的命名规范第一个字母大写
            $action = $info[1];
        }else{
            $class = "\web\controller\Index";
            $action = "index";
        }
        echo (new $class)->$action();//实例化一个类新方法
    }
}