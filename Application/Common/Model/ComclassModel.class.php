<?php
/**
*	企业信息 model
*
*/
namespace Common\Model;
use Think\Model;
class ComclassModel extends Model{

	public function parentarray()
	{
		$parents = $this->where(array('pid'=>0))->order('sort ASC')->select();
	
		return $parents;
	
	
	}

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
	*	读取一个 id 的 name 值
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