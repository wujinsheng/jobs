<?php
namespace Personal\Controller;
use Think\Controller;
class IndexController extends PController {
    protected function _initialize()
	{
	
		$this->assign('control', 'Index');	
	}

    public function index(){

		$user = session('user_auth');
		
		$user = M('User')->where(array('uid'=>$user['uid']))->find();
		$userinfo = D('Userinfo')->where(array('uid'=>$user['uid']))->find();
		
		$this->assign('user', $user);
		$this->assign('userinfo', $userinfo);

		$this->display();
    }
}