<?php
namespace app\ctrl;
use app\model\liuyanModel;
class indexCtrl extends \core\ZL
{
//所有留言
    public function index()
    {
        $model = new liuyanModel();
        $data=$model->all();
        $this->assign('data',$data);
        $this->display('index.html');
    }


//添加留言
    public function add()
    {

        $this->display('add.html');        
    }
//保存留言
    public function save()
    { 

      $data['title']=post('title');
      $data['content']=post('content');
      $data['creattime']=time();
      $model=new liuyanModel();
      $re=$model->addOne($data);
      if($re)
      {
        jump('/');
      }
      else
      {
       jump('/index.php/index/add'); 
      }
    }
    public function del()
    {
        $id=get('id','0','int');
        if($id)
        {
            $model=new liuyanModel();
            $re=$model->delOne($id);
            if($re)
            {
               jump('/'); 
            }
            else
            {
                exit('删除失败');
            }
        }
        else
        {
           exit('参数错误'); 
        }
    }
}