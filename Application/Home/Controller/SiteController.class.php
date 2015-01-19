<?php
namespace Home\Controller;
use Think\Controller;


class SiteController extends Controller {


	
	public function user(){
		
		if(is_login())
			echo is_login().' logged.';
		else
			echo 'not logged.';
			
		echo '<br/>';
		dump(session());
		
	}
	/*
	*	登录页面
	*/
	public function login($email='',$password=''){

		if(IS_POST){
			$model = D("User");
			$uid = $model->login($email,$password);
			
			if($uid>0) {
				$user = session('user_auth');
				if($user['usertype'] == 1)
					$this->success('登录成功',U('/personal'));
				elseif($user['usertype'] == 2)
					$this->success('登录成功',U('/company'));
			
			}
			else {
				$this->error('登录失败');
				$this->display();
			}
			
		}
		else
			$this->display();
	}
	
	/**
	* 注册页面
	*
	*/
	public function register($email='',$password='')
	{
		if(IS_POST){
			$model = D("User");
			$uid = $model->where(array('email'=>$email))->find();
			
			if($uid) {
				$this->error('已有用户');
			}
			else {
				$this->success('注册成功', U('/personal'));
				$this->display();
			}
			
		}
		else
			$this->display();	
	
	
	}
	
	private function checkuser($username, $password) {
		$model = D("User");
		$user = $model->where(array('username'=>$username))->find();
		if(is_array($user) ){
			/* 验证用户密码 */
			if(md5($password) === $user['password']){
				//$this->updateLogin($user['id']); //更新用户登录信息
				return $user['id']; //登录成功，返回用户ID
			} else {
				return -2; //密码错误
			}
		} else {
			return -1; //用户不存在或被禁用
		}		
	}
	
	public function logout() {
		if(is_login()){
			D('user')->logout();
			$this->success('退出成功！', U('Site/login'));
		} else {
			$this->redirect('Site/login');
		}
	}
	
	public function test() {
		$Verify = new \Think\Verify();
		$Verify->entry();		
		
	}
}