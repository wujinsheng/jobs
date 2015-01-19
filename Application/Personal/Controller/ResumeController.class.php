<?php
namespace Personal\Controller;
use Think\Controller;
class ResumeController extends PController {

    protected function _initialize()
	{


		$this->assign('control', 'Resume');
		$this->assignuser();	
		
		$items = D('Userclass')->level2array();
		$parents = D('Userclass')->parentarray();	// userclass 表 父类数组
		$idnames = D('Userclass')->idnames();
		
		$this->assign('items', $items);
		$this->assign('parents', $parents);
		$this->assign('idnames', $idnames);

	}

    public function index(){

		$user = session('user_auth');
	
		
		$user = M('User')->where(array('uid'=>$user['uid']))->find();
		$userinfo = D('Userinfo')->where(array('uid'=>$user['uid']))->find();
		$userexpects = M('Userexpect')->where(array('uid'=>$user['uid']))->select();
		

		$this->assign('user', $user);
		$this->assign('userinfo', $userinfo);
		$this->assign('userexpects', $userexpects);
		
		$this->display();
    }

	/**
	* 编辑简历
	*
	*/
	public function edit()
	{
		$id = I('get.id');

		$user = session('user_auth');
	
		$userinfo = M('Userinfo')->where(array('uid'=>$user['uid']))->find();	//TEMP : 用 uid=2 号 userinfo 
		$userexpect = M('Userexpect')->where(array('id'=>$id))->find();
		$usereducations =  M('Usereducation')->where(array('eid'=>$id))->select();

		$this->assign('user', $user);
		$this->assign('userinfo', $userinfo);
		$this->assign('userexpect', $userexpect);
		$this->assign('usereducations', $usereducations);
		
		$this->assign('eid', $id);
		$this->display();
	}
	
	/**
	* 保存 用户信息
	*
	*/
	public function saveUserinfo()
	{
		if(IS_POST)
		{
			$m = D('Userinfo');
		
			if(!$m->create())
			{
				$this->error($m->getError());
			}
			else
			{
				$m->save();
				$this->success('个人信息保存成功！');
			}
		}
	}
	/**
	* 保存 求职意向
	*
	*/
	public function saveUserExpect()
	{
		if(IS_POST)
		{
			$m = D('Userexpect');
			if(!$m->create())
			{
			
				$this->error($m->getError());
			}
			else
			{
				$m->add();
				$this->success('求职意向保存成功！');
			}
		}
	}
	
	public function addUserEducation()
	{
		if(IS_POST)
		{


		
			$m = D('Usereducation');
			if(!$m->create())
			{
			
				$this->error($m->getError());
			}
			else
			{
				
				$m->add();
				$this->success('求职意向保存成功！');
			}
		}	
	
	
	}
	
	/**
	*	读取 userclass 表 并分配	
	*
	*/
	protected function assignuser()
	{
	
		$class = D('Userclass')->keyarray();
		
		foreach($class as $key=>$c)
		{
		
			$this->assign($key, $c);
		}
	
	
	}	
	
}