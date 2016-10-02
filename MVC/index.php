<?php 
  /**
   * 入口文件
   * 1.定义常量
   * 2.加载函数库
   * 3.启动框架
   */
  /**
   * 定义常量
   */
   //当前框架所在的根目录
   define('ZL',realpath('./'));
   //定义核心文件所在的根目录
   define('CORE',ZL.'/core');
   //定义项目目录
   define('APP',ZL.'/app');
   define('MODULE','app');
   define('DEBUG',true);

   include "vendor/autoload.php";
   if(DEBUG)

   { 
    $whoops = new \Whoops\Run;
    $errorTitle = '框架出错了！';
    $option = new \Whoops\Handler\PrettyPageHandler();
    $option->setPageTitle($errorTitle);
    $whoops->pushHandler($option);
    $whoops->register();
   	 ini_set('display_error','On');
   }
   else
   {
   	 ini_set('display_error','Off');
   }
   /**
    * 加载函数
    */
   include CORE.'/common/function.php';
   include CORE.'/ZL.php';
   /**
    * 启动框架
    */
   
   spl_autoload_register('\core\zl::load');//当加载的类不存在时加载zl下的load方法
   \core\zl::run();
   
?>