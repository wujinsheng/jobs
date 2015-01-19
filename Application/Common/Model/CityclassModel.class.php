<?php
/**
*	地区 model
*
*/
namespace Common\Model;
use Think\Model;
class CityclassModel extends Model{


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

}