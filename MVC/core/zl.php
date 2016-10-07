<?php 
  namespace core;

  class zl
  {
  	public static $classMap = array();
  	public $assign;
  	static public function run()
  	 {
  	 	\core\lib\log::init();//启动初始化方法
      \core\lib\log::log($_SERVER,'server');
  	 	$route = new \core\lib\route();
  	 	$ctrlClass =  $route->ctrl;
  	 	$action = $route->action;
  	 	 $ctrlfile = APP.'/ctrl/'.$ctrlClass.'Ctrl.php';
  	 	 $ctrlClass = '\\'.MODULE.'\ctrl\\'.$ctrlClass.'Ctrl';
  	 	
  	 	if(is_file($ctrlfile))
  	 	{
          include $ctrlfile;
          $ctrl = new $ctrlClass;
          $ctrl->$action();
          \core\lib\log::log('ctrl:'.$ctrlClass.'  '.'action:'.$action);
  	 	}
  	 	else
  	 	{
  	 	 throw new \Exception('找不到控制器'.$ctrlClass);
  	 	}

  	 }
  	 
  	 static public function load($class)
  	 {
  	 	//自动加载类
  	 	//加载路由（new\core\route();）
  	 	//$class='\core\route';
  	 	//ZL.'/core/route.php';
  	 	// p($class);
  	 	// p(ZL.$class.'.php');
  	 	if(isset($classMap[$class]))
  	 	{
  	 		return true;
  	 	}
  	 	else
  	 	{
            $class=str_replace('\\', '/', $class);
            $file=ZL.'/'.$class.'.php';
	  	 	if(is_file($file))
	  	 	{
	  	 		include $file;
	  	 		self::$classMap[$class] = $class;
	  	 	}
	  	 	else
	  	 	{
	          return false;   
	  	 	}
  	 	}
  	 }

  	 public function assign($name,$value)
  	 { 
  	 	//p($value);
       $this->assign[$name] = $value;
  	 }

  	 public function display($file)
  	 {   
         
         $files = APP.'/view/'.$file;

         if(is_file($files))
         {   
            \Twig_Autoloader::register();
            $loader = new \Twig_Loader_Filesystem(APP.'/view');
            $twig = new \Twig_Environment($loader, array(
                'cache' => ZL.'/log/twig',
                'debug' => DEBUG
            ));
            $template = $twig->loadTemplate($file);
            
            $template->display($this->assign?$this->assign:array());

         }
  	 }
  }
?>