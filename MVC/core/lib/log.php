<?php 
 namespace core\lib;
 use core\lib\conf;
 class log
 {
 	/**
 	 * 1.确定日志的存储方式
 	 *
 	 * 2.写日志
 	 */
 	static $class;
 	//初始化方式
   static public function init()
 	{
     //确定存储方式
     $drive = conf::get('DRIVE','log');//加载驱动模型
     $class = '\core\lib\drive\log\\'.$drive;//加载类
     self::$class = new $class;
 	}

 	static public function log($name,$file = 'log')
 	{
 		self::$class->log($name,$file);
 	}
 }
?>