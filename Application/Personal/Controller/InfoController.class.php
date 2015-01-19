<?php
namespace Personal\Controller;
use Think\Controller;
class InfoController extends PController {

    protected function _initialize()
	{
	
	
	}

    public function index(){
	
		if(IS_POST) {
		
			$data = array(
				'name'=>I('post.name'),
				
			);
				
		
			//$this->redirect('index/index');
		}
		$user = session('user_auth');
		$info = M('info')->where(array('uid'=>$user['uid']))->find();
		
		$education = M('userclass')->where(array('pid'=>4))->select();
		
		foreach( $this->_userclass() as $key=> $userclass )
		{
		
			$this->assign( $key, $userclass);
		
		}
		
		$this->assign('info', $info);
		$this->display();
    }

	protected function _userclass()
	{
	
		$parent = M('userclass')->where(array('pid'=>0))->select();
		
		foreach($parent as $class)
		{
			$items = M('userclass')->where(array('pid'=>$class['id']))->select();
			$array[$class['keyname']] = $items;
		
		
		}

		return $array;
	
	}
	
}