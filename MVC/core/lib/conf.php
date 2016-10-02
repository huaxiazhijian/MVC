<?php 
  namespace core\lib;

  class conf
  {  
  	 //缓存配置项
  	  static public $conf = array();
  	 //由于经常使用所以定义一个静态的方法
  	 //加载单个类
  	 //$name 加载的配置名称 $file 加载的文件
  	
  	static public function get($name,$file)
  	{
     /**
      * 1.判断配置文件是否存在
      * 2.判断配置是否存在
      * 3.缓存配置
      */
     
     if(isset(self::$conf[$file]))
     {
     	return self::$conf[$file][$name];
     }
     else
     {  
     	
        $path=ZL.'\core\config\\'.$file.'.php';
	     if(is_file($path))
	     {
	       $conf = include $path;
	       if(isset($conf[$name]))
	       {
	         self::$conf[$file] = $conf;
	         return $conf[$name];
	       }
	       else
	       {
	         throw new \Exception('找不到配置项'.$name);
	       }
	     }
	     else
	     {
	     	throw new \Exception('找不到配置文件'.$file);
	     }
	  }
    }

    /**
     * 加载所有类的函数
     */
    static public function all($file)
    {
           if(isset(self::$conf[$file]))
	     {
	     	return self::$conf[$file];
	     }
	     else
	     {  
	     	
	        $path=ZL.'\core\config\\'.$file.'.php';
		     if(is_file($path))
		     {
		       $conf = include $path;
		       self::$conf[$file] = $conf;
		       return $conf;
		     }
		     else
		     {
		     	throw new \Exception('找不到配置文件'.$file);
		     }
		  }
    }
  }

?>