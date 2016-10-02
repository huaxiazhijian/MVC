<?php 
  namespace app\model;
  use core\lib\model;
  class cModel extends model
  {
  	public $table = 'documents';
  	//查询
  	public function lists()
  	{
     $ret = $this->select($this->table,'*');
     return $ret;
  	}
  }
?>
