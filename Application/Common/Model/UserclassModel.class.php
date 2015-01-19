<?php
/**
*	用户个人信息 model
*
*/
namespace Common\Model;
use Think\Model;
class UserclassModel extends Model{

	/**
	* userclass 的父类数组
	*
	*/
	public function parentarray()
	{
		$parents = $this->where(array('pid'=>0))->order('sort ASC')->select();
	
		return $parents;
	}

	/**
	* userclass 的所有类数组 为后台管理常用
	*
	*/
	public function level2array()
	{

		$parents = $this->where(array('pid'=>0))->select();
		foreach($parents as $p)
		{
			$items[] = $p;
			
			$city = $this->where(array('pid'=>$p['id']))->select();
			foreach($city as $c)
				$items[] = $c;
		}	
		return $items;
	
	}
	
	/*
	*	输出所有 数组为选项
	*	输出格式: array('com_salary'=>array('id'=>xx,'name'=>xx));
	*
	*/
	public function keyarray()
	{
	
		$parents = $this->where(array('pid'=>0))->select();
		foreach($parents as $p)
		{
			$items[$p['keyname']] = array();
			
			$city = $this->where(array('pid'=>$p['id']))->select();
			foreach($city as $c)
				$items[$p['keyname']][] = $c;
		}	
		return $items;
	}

	/*
	*	读取 id  name 值的数组 格式 array(1=>'性别', 2=>'男', 3=>'女');
	*
	*/
	public function idnames()
	{
		$items = $this->select();
	
		foreach($items as $item)
		{
			$array[$item['id']] = $item['name'];
		
		}
		return $array;;
		
	}
	
}