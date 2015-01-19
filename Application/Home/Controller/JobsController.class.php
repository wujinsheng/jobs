<?php
namespace Home\Controller;
use Think\Controller;
class JobsController extends Controller {
    public function index(){
		
		$this->assigncom();
		
		$items = D('Industryclass')->namearray();
		
		
		
		$this->assign('items', $items);
		
		/* $comclass = D('Comclass')->keyarray();
		$this->assign('comclass', $comclass);
		 */
		 
		
        $this->display();
    }

	
	protected function assigncom()
	{
	
		$comclass = D('Comclass')->keyarray();
		
		foreach($comclass as $key=>$c)
		{
		
			$this->assign($key, $c);
		}
	
	
	}
}