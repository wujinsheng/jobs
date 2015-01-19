<?php
namespace Admin\Controller;
use Think\Controller;
class CityController extends Controller {

    public function index(){

		$items = D('Cityclass')->level2array();
		
		$this->assign('items', $items);
        $this->display();
	}
}