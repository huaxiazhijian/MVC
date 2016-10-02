<?php 
  namespace core\lib;
  use core\lib\conf;
   //class model extends \PDO  pdo方式
   class model extends \medoo  //插件MEDOO方式
   {
   	  public function __construct()
   	  {
   	  	
         $option = conf::all('database');
         
   	  	/*try
   	  	{
   	  		parent::__construct($database['DSN'], $database['USERNAME'], $database['PASSWD']);
   	  	}catch(\PDOException $e)
   	  	{
   	  		p($e->getMessage());
   	  	}*/
        parent::__construct($option);
   	  }
   }
?>