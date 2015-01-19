<?php
/**
*	行业 model
*
*/
namespace Common\Model;
use Think\Model;
class IndustryclassModel extends Model{

	// 父类 array
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
	
	public function namearray()
	{
	
		$parents = $this->where(array('pid'=>0))->select();
		foreach($parents as $p)
		{
			$items[$p['name']] = array();
			
			$city = $this->where(array('pid'=>$p['id']))->select();
			foreach($city as $c)
				$items[$p['name']][] = $c;
		}	
		return $items;
	}
	
}