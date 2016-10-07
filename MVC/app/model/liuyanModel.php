<?php 
  namespace app\model;
  use core\lib\model;
  class liuyanModel extends model
  {
  	public $table = 'liuyan';
  	//查询
  	public function all()
  	{
      return $this->select($this->table,'*');
  	}
    public function addOne($data)
    {
      return $this->insert($this->table,$data);
    }
    public function delOne($id)
    {
      $re = $this->delete($this->table,array(
            'id'=>$id
        ));
      if($re !==false)
      {
        return true;
      }
      else
      {
        return false;
      }
    }
  }
?>
