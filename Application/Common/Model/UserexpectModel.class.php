<?php
namespace Common\Model;
use Think\Model;
class UserexpectModel extends Model{

	protected $_auto = array(
		array('uid', 'setUid', self::MODEL_INSERT, 'callback'),
		array('update_time', NOW_TIME, self::MODEL_BOTH),
	);

	protected function setUid()
	{
		$user = session('user_auth');
	
		return $user['uid'];
	}	
}