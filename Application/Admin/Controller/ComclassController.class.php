<?php
namespace Admin\Controller;
use Think\Controller;
class ComclassController extends Controller {

	/* 个人分类列表 */
    public function index(){
	
	
		$items = D('Comclass')->level2array();
		$parents = D('Comclass')->parentarray();
		
		
		$this->assign('items', $items);
		$this->assign('parents', $parents);
		$this->display();
    }
	
	
	/*
	* 添加分类
	*/
	public function addp()
	{
	
		if(IS_POST)
		{
			$data = array(
				'name'=> I('post.name'),
				'keyname'=> I('post.keyname'),
				'pid'=>0,
			);
			$m = M('Comclass');
			
			if($m->add($data)) echo json_encode('ok');
			else
				$this->error('error');
		}
	}
		
	/*
	* 添加子类
	*/
	public function add()
	{
		if(IS_POST)
		{
			$data = array(
				'name'=> I('post.name'),

				'pid'=>I('post.pid'),
			);
			$m = M('Comclass');
			
			if($m->add($data)) echo json_encode('ok');
			else
				$this->error('error');
		}	
	
	}
	/*
	* 删除父类
	*/
	public function delp()
	{
		$id = I('get.id');
		
		$m = D('Comclass');
		
		$m->where(array('pid'=>$id))->delete();
		$m->where(array('id'=>$id))->delete();
		
		$this->redirect('Comclass/index');
	}
	/*
	* 删除子类
	*/
	public function del()
	{
		$id = I('get.id');
		
		$m = D('Comclass');
		
		$m->where(array('id'=>$id))->delete();
		
		$this->redirect('Comclass/index');
	}


}