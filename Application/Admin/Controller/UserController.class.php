<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {

    public function index(){

		$users = M('User')->where(array('usertype'=>1))->select();
		
		$this->assign('users', $users);
        $this->display();
	}
}