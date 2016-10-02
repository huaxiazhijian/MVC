<?php 
namespace core\lib\drive\log;
use core\lib\conf;
 //将日志存储在文件系统中
class file
{ 

  public $path;//日志存储位置
  public function __construct()
  {
  	$conf = conf::get('OPTION','log');
  	$this->path = $conf['PATH'];
  }
  /**
   * 写日志功能
   * 
   */
  public function log($message,$file='log')
  {
  	/**
  	 * 1.确定文件存储位置是否存在
  	 *   不存在新建目录
  	 * 2.写日志
  	 */
  	if(!is_dir($this->path.date('YmdH')))
  	{
      mkdir($this->path.date('YmdH'),'0777',true);
  	}
  	
  	return file_put_contents($this->path.date('YmdH').'/'.$file.'.php',date('Y-m-d H:i:s').json_encode($message).PHP_EOL,FILE_APPEND);
  }
}
?>