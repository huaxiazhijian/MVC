<?php 
  namespace app\ctrl;
  use core\lib\model;
  class indexCtrl extends \core\zl
  {
  	public function index()
  	{
  		
  		// $model = new \core\lib\model();
  		// //数据库操作
  		// $sql = 'select * from documents';
  		// $re=$model->query($sql);
  		// p($re->fetchall());
      // $temp = \core\lib\conf::get('CTRL','route');
      // $temp = \core\lib\conf::get('ACTION','route'); 
      // P($temp); 
      //   $temp=new \core\lib\model();
      //   $data = 'Hello World';
  		// $this->assign('data',$data);
  		// $this->display('index.html');
      //$model = new \app\model\cModel(); 
      
      // $re=$model->select('documents','*');
      // $data = array(
      //     '字段'=>'值'
      //   );
      // $ret = $model->insert('表明'，$data);
      // //具体用法可以查看medoo官方文档
      // dump($re);
      // $ret = $model->lists();
      // dump($ret);
      
      $data = 'hllow word';
      $this->assign('data',$data);
      $this->display('index.html');
     
  	} 
    public function test()
      {
        $data = 'dsadd';
        $this->assign('data',$data);
        $this->display('test.html');
      }
  } 
?>