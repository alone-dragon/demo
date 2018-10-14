<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2018/10/14
 * Time: 16:26
 */
namespace core;
class bootstrap{
    public static function run(){
       self::parseUrl();
    }
//    分析url生成控制器方法常量
    public static function parseUrl(){
        if(isset($_GET['s'])){
//            分析s变量生成控制器方法
            $info=explode('/',$_GET['s']);
            $class='\web\controller\\'.ucfirst($info[0]);
            $action=$info[1];
        }else{
            $class='\web\controller\Index';
            $action='show';
        }
        (new $class)->$action();
//        dd($_SERVER);
    }
}