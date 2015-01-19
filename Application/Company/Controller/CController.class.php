<?php
namespace Company\Controller;
use Think\Controller;
class CController extends Controller {

    protected function _initialize(){
        
        if( !is_login() ){// 还没登录 跳转到登录页面
            $this->redirect('home/site/login');
        }
		
		$user = session('user_auth');
		
		if($user['usertype'] <> 2) exit('not company user!');
	}
}