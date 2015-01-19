<?php
namespace Common\Model;
use Think\Model;
class UserModel extends Model{

	public function check($email){
		
		$user = $this->where(array('email'=>$email))->find();
		if(!$user){ //未注册
			
			return false;
		    
		} else {
			return $user['uid'];
		}
	}

	/**
	 * 登录指定用户
	 * @param  string $username 用户usernames
	 * @param  string $password 用户password
	 * @return integer -1 无此用户，-2 密码错误，正常返回Uid
	 */
	public function login($email, $password)
	{
		$user = $this->where(array('email'=>$email))->find();
		if(!$user){ //未注册
			
			return -1;
		    
		} elseif(md5($password) != $user['password']) {
			
			return -2;
		} else {
			$this->autoLogin($user);
			return $user['uid'];
		}
	}
	/**
	 * 自动登录用户
	 * @param  integer $user 用户信息数组
	 */
	protected function autoLogin($user){
		/* 更新登录信息 */
		$data = array(
		    'uid'             => $user['uid'],
		    'login_time' => NOW_TIME,
		    'login_ip'   => get_client_ip(1),
		);
		$this->save($data);
	
		/* 记录登录SESSION和COOKIES */
		$auth = array(
		    'uid'             => $user['uid'],
		    'email'        => $user['email'],
		    'login_time' => $user['login_time'],
			'usertype'	=>	$user['usertype'],
		);
	
		session('user_auth', $auth);
		session('user_auth_sign', data_auth_sign($auth));
	}
	
	public function logout() {

		session('user_auth', null);
		session('user_auth_sign', null);
	
	}

}