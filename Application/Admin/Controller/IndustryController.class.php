<?php
namespace Admin\Controller;
use Think\Controller;
class IndustryController extends Controller {

    public function index(){

		$parents = D('Industryclass')->parentarray();
		$items = D('Industryclass')->level2array();
		
		$this->assign('items', $items);
		$this->assign('parents', $parents);
		$this->display();
	}
	
	/*
	* 添加父类
	*/
	public function addp()
	{
	
		if(IS_POST)
		{
			$data = array(
				'name'=> I('post.name'),
				'pid'=>0,
			);
			$m = M('Industryclass');
			
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
			$m = M('Industryclass');
			
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
		
		$m = D('Industryclass');
		
		$m->where(array('pid'=>$id))->delete();
		$m->where(array('id'=>$id))->delete();
		
		$this->redirect('Industry/index');
	}
	/*
	* 删除子类
	*/
	public function del()
	{
		$id = I('get.id');
		
		$m = D('Industryclass');
		
		$m->where(array('id'=>$id))->delete();
		
		$this->redirect('Industry/index');
	}
	
}