<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
	
		
        $this->display();
    }
	
	public function register($email,$password,$authcode,$usertype)
	{
		$model = D('user');
	
		if(IS_POST){ //注册用户
			/* 检测验证码 */
			if(!$this->check_verify($authcode)){
				$this->error('验证码输入错误！');
			}
			
			$uid = $model->check($email);
			
			if($uid>0) {
				
				echo $uid;
			}
			else {
				$data['email'] = $email;
				$data['password'] = md5($password);
				$data['usertype'] = $usertype;
				$model->add($data);
				
				echo 'registered!';
			}
		}	
	}
	
	public function login($email, $password)
	{
		$model = D('User');
		
		$user = $model->where(array('email'=>$_POST['email']))->find();
		
		//dump($user);
		
		if($user && $user['password'] ===md5($password))
			echo 'success';
		else 
			echo 'fail';
	
	}
	private function check_verify($code, $id = 1){
		$verify = new \Think\Verify();
		return $verify->check($code, $id);
	}
	
	/* 验证码，用于登录和注册 */
	public function verify(){
		$verify = new \Think\Verify();
		$verify->imageW = 70;
		$verify->imageH = 24;
		$verify->length = 3;
		$verify->fontSize = 12;
		$verify->useNoise = false;
		$verify->useCurve = false;
		$verify->entry(1);
	}	
}